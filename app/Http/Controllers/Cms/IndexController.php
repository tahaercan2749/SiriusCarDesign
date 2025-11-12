<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\UserVisits;
use App\Models\VisitedUserCalls;
use App\Services\CommonService;
use App\Services\LogService;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    protected CommonService $commonService;

    public function __construct(CommonService $commonService)
    {
        $this->commonService = $commonService;
    }

    public function index()
    {
        return view('cms.index');
    }

    public function slugMaker(Request $request): JsonResponse
    {
        $slug = $this->commonService->slugMaker($request->text);
        return response()->json(['slug' => $slug]);
    }

    public function getVisitedUsers(Request $request)
    {
        try {
            $startDate = Carbon::today()->subDays($request->days);
            $visitors = UserVisits::selectRaw('visited_date, COUNT(DISTINCT ip_address) as total')
                ->where('visited_date', '>=', $startDate)
                ->groupBy('visited_date')
                ->orderBy('visited_date', 'asc')
                ->get()
                ->map(function ($item) {
                    return [
                        'visited_date' => Carbon::parse($item->visited_date)->translatedFormat('j F'),
                        'total' => $item->total
                    ];
                });
            return response()->json(['status' => 'success', 'message' => "Kullanıcı verileri çekildi.", 'visitors' => $visitors]);
        } catch (\Throwable $exception) {
            LogService::add("Visited Users Function", "error", "Kullanıcı bilgileri çekilemedi => " . $exception->getMessage());
            return response()->json(['status' => 'error', 'message' => "Kullanıcı bilgileri çekilemedi"]);
        }

    }
    public function getVisitedUsersCalls(Request $request)
    {
        try {
            $startDate = Carbon::today()->subDays($request->days);
            $calls = VisitedUserCalls::selectRaw('DATE(created_at) as date, type, COUNT(*) as total')
                ->where('created_at', '>=', $startDate)
                ->groupBy('date', 'type')
                ->orderBy('date')
                ->get()
                ->groupBy('date'); // index'leri sıfırla
            return response()->json(['status' => 'success', 'message' => "Kullanıcı verileri çekildi.", 'calls' => $calls]);
        } catch (\Throwable $exception) {
            LogService::add("Visited Users Calls Function", "error", "Kullanıcı Arama Mesaj Bilgileri çekilemedi => " . $exception->getMessage());
            return response()->json(['status' => 'error', 'message' => "Kullanıcı Arama Mesaj Bilgileri çekilemedi"]);
        }

    }

    public function getCallRecords($days)
    {
        return 0;
    }


}
