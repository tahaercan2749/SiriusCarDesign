<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\AdsCampaigns;
use App\Services\AdsCampaignService;
use Illuminate\Http\Request;

class AdsCampaignController extends Controller
{

    protected AdsCampaignService $adsCampaignsService;

    public function __construct(AdsCampaignService $adsCampaignsService)
    {
        $this->adsCampaignsService = $adsCampaignsService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campaigns = AdsCampaigns::all();
        return view('cms.adsCampaigns.index', compact('campaigns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.adsCampaigns.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $result = $this->adsCampaignsService->store($request);
        return redirect()->route('cms.ads-campaigns.index')->with(["status" => $result["status"], "message" => $result["message"]]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $result = $this->adsCampaignsService->show($id);
        return view('cms.adsCampaigns.show')->with([
            "status" => $result["status"],
            "message" => $result["message"],
            'campaign' => $result["campaign"]
        ]);
    }

    public function analysis()
    {
        $result = $this->adsCampaignsService->analysis();
        return view('cms.adsCampaigns.analysis')->with(['campaigns' => $result["campaigns"]]);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
