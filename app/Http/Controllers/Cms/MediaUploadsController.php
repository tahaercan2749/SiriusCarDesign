<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\MediaUpload;
use App\Models\Page;
use App\Services\MediaUploadsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class MediaUploadsController extends Controller
{
    protected MediaUploadsService $mediaUploadsService;

    public function __construct(MediaUploadsService $mediaUploadsService)
    {
        $this->mediaUploadsService = $mediaUploadsService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medias = Cache::remember('medias', now()->addDay(), function () {
            return MediaUpload::all();
        });
        return view('cms.mediaUploads.index', compact('medias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.mediaUploads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $result = $this->mediaUploadsService->store($request);
        return response()->json(["message" => $result["message"], "status" => $result["status"],"fileName"=>$result["file"]->name,"filePath"=>$result["file"]->fileLink()]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = $this->mediaUploadsService->destroy($id);
        return response()->json(["message" => $result["message"], "status" => $result["status"]]);
    }
}
