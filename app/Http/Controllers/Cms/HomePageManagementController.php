<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomePageManagementStoreRequest;
use App\Models\HomePageManagement;
use App\Models\Page;
use App\Services\HomePageManagementService;
use App\Services\LogService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomePageManagementController extends Controller
{
    private HomePageManagementService $homePageManagementService;

    public function __construct(HomePageManagementService $homePageManagementService)
    {
        $this->homePageManagementService = $homePageManagementService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homeSections = Cache::remember("homeSections", now()->addDay(), function () {
            return HomePageManagement::all();
        });
        return view("cms.homePageManagement.index", compact("homeSections"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pages = Page::select("id", "title")->get();
        return view("cms.homePageManagement.create", compact("pages"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HomePageManagementStoreRequest $request)
    {
        $result = $this->homePageManagementService->store($request);
        return redirect()->route("cms.home-page-management.index")->with([
            "status" => $result["status"],
            "message" => $result["message"]
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $pages = Page::select("id", "title")->get();
            $section = HomePageManagement::findOrFail($id);
            if ($section) {
                return view("cms.homePageManagement.edit", compact("pages", "section"));
            } else {
                return redirect()
                    ->route("cms.home-page-management.index")
                    ->with(["status" => "error", "message" => "Düzenlemek İstediğiniz Kısım Bulunamadı"]);
            }
        } catch (\Throwable $exception) {
            $status = "error";
            $message = "Hata Oluştu";
            LogService::add("HomePageManagementController Update", $status, $message . " => " . $exception->getMessage());
            return redirect()->route("cms.home-page-management.index")->with(["status" => $status, "message" => $message]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $result = $this->homePageManagementService->update($request, $id);
        return redirect()->route("cms.home-page-management.index")->with([
            "status" => $result["status"],
            "message" => $result["message"]
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = $this->homePageManagementService->destroy($id);
        return response()->json(["status" => $result["status"], "message" => $result["message"]]);
    }

    public function deleted()
    {
        $homeSections = HomePageManagement::onlyTrashed()->get();
        return view("cms.homePageManagement.deleted", compact("homeSections"));
    }

    public function restore(string $id)
    {
        $result = $this->homePageManagementService->restore($id);
        return response()->json(["status" => $result["status"], "message" => $result["message"]]);
    }

    public function forceDelete(string $id)
    {
        $result = $this->homePageManagementService->forceDelete($id);
        return response()->json(["status" => $result["status"], "message" => $result["message"]]);
    }
}
