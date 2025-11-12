<?php

namespace App\Http\Middleware;

use App\Models\CampaignVisits;
use App\Models\User;
use App\Models\UserVisits;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackCampaignVisits
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Eğer zaten kaydedildiyse tekrar kayıt oluşturma (cookie ile basit koruma)
        if ($request->has('utm_source')) {
            if (!$request->hasCookie('campaign_tracked' . $request->query('utm_campaign'))) {
                // UTM ve diğer izleme parametreleri
                $utm_source = $request->query('utm_source');
                $utm_medium = $request->query('utm_medium');
                $utm_campaign = $request->query('utm_campaign');
                $utm_content = $request->query('utm_content');

                $gad_campaignid = $request->query('gad_campaignid');
                $ad_group_id = $this->parseAdGroupId($request->query('utm_content'));
                $gclid = $request->query('gclid');
                $gbraid = $request->query('gbraid');

                $ip_address = $request->ip();
                $user_agent = $request->userAgent();
                $referrer = $request->headers->get('referer');
                $landing_url = $request->fullUrl();

                // En azından bir UTM parametresi varsa kayıt oluştur
                if ($utm_source || $utm_campaign || $gclid || $gad_campaignid) {
                    CampaignVisits::create([
                        'utm_source' => $utm_source,
                        'utm_medium' => $utm_medium,
                        'utm_campaign' => $utm_campaign,
                        'utm_content' => $utm_content,
                        'gad_campaignid' => $gad_campaignid,
                        'ad_group_id' => $ad_group_id,
                        'gclid' => $gclid,
                        'gbraid' => $gbraid,

                        'ip_address' => $ip_address,
                        'user_agent' => $user_agent,
                        'referrer' => $referrer,
                        'landing_url' => $landing_url,
                        'visited_at' => Carbon::now(),
                    ]);
                }

                // 1 saatlik cookie koy (tekrar kayıt önleme için)
                cookie()->queue(cookie('campaign_tracked' . $request->query('utm_campaign'), true, 60));
            }
        }

        $this->saveVisitedUser($request);

        return $next($request);
    }

    // Basit ad group id parser (utm_content içinde "agid:xxx" varsa onu çıkar)
    private function parseAdGroupId($utmContent)
    {
        if (!$utmContent) return null;

        preg_match('/agid:(\d+)/', $utmContent, $matches);
        return $matches[1] ?? null;
    }

    private function saveVisitedUser(Request $request)
    {
        $ip = $request->ip();
        $today = Carbon::today();

        $alreadyVisited = UserVisits::where('ip_address', $ip)
            ->where('visited_date', $today)
            ->exists();

        if (!$alreadyVisited) {
            UserVisits::create([
                'ip_address' => $ip,
                'user_agent' => $request->userAgent(),
                'visited_date' => $today,
            ]);
        }
    }

}
