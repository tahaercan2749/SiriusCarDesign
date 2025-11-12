<?php

namespace App\Services;

use App\Models\AdsCampaigns;
use App\Models\Blade;
use App\Models\CampaignVisits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdsCampaignService
{
    protected CommonService $commonService;

    public function store(Request $request)
    {
        $status = 'success';
        $message = 'Reklam Kampanyası Kaydedildi';
        try {
            $name = $request->name;
            $utmSource = Str::slug($request->utm_source, "-");
            $utmMedium = Str::slug($request->utm_medium, "-");
            $utmCampaign = Str::slug($request->utm_campaign, "-");
            $utmContent = Str::slug($request->utm_content, "-");
            $gadCampaignid = $request->gad_campaignid;
            $adGroupId = $request->ad_group_id;
            $params = [
                'utm_source' => $utmSource,
                'utm_medium' => $utmMedium,
                'utm_campaign' => $utmCampaign,
                'utm_content' => $utmContent,
                'gad_campaignid' => $gadCampaignid,
                'ad_group_id' => $adGroupId,
            ];

            $link = env('APP_URL') . '?' . http_build_query($params);

            $campaign = AdsCampaigns::create([
                'name' => $name,
                'utm_source' => $utmSource,
                'utm_medium' => $utmMedium,
                'utm_campaign' => $utmCampaign,
                'utm_content' => $utmContent,
                'gad_campaignid' => $gadCampaignid,
                'ad_group_id' => $adGroupId,
                'link' => $link,
            ]);
            LogService::add("AdsCampaign Service Store", $status, $message);
            return ['status' => $status, 'message' => $message];

        } catch (\Throwable $exception) {
            $status = 'error';
            $message = 'Reklam Kampanyası Kaydedilemedi';
            LogService::add("AdsCampaign Service Store", $status, $message . " => " . $exception->getMessage());
            return ['status' => $status, 'message' => $message];
        }

    }

    public function show($id)
    {
        $status = "success";
        $message = "Reklam Kampanyası Bulundu";
        try {
            $campaign = AdsCampaigns::findOrFail($id);
            return ['status' => $status, 'message' => $message, 'campaign' => $campaign];
        } catch (\Throwable $exception) {
            $status = 'error';
            $message = 'Reklam Kampanyası Bulunamadu';
            LogService::add("AdsCampaign Service Show", $status, $message . " => " . $exception->getMessage());
            return redirect()->route('cms.ads-campaigns.index')->with(['status' => $status, 'message' => $message]);
        }
    }

    public function analysis()
    {
        $status = "success";
        $message = "Reklam Kampanyaları Çekildi";

        try{
            $campaigns = CampaignVisits::select('utm_campaign', DB::raw('COUNT(*) as visit_count'))
                ->groupBy('utm_campaign')
                ->orderByDesc('visit_count')
                ->get();

            return ['campaigns'=>$campaigns,'status'=>$status,'message'=>$message];


        }catch (\Throwable $exception){
            $status = 'error';
            $message = 'Reklam Kampanyalar Bulunamadı';
        }
    }

}
