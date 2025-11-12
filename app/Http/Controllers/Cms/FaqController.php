<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqStoreRequest;
use App\Models\Faq;
use App\Models\Page;
use App\Services\BladeService;
use App\Services\FaqService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class FaqController extends Controller
{
    protected FaqService $faqService;

    public function __construct(FaqService $faqService)
    {
        $this->faqService = $faqService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Cache::remember('faqs',now()->addDay(), function () {
            return Faq::all();
        });
        return view('cms.faqs.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pages = Cache::remember('pages',now()->addDay(), function () {
            return Page::all();
        });
        return view('cms.faqs.create', compact('pages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FaqStoreRequest $request)
    {
        $result = $this->faqService->store($request);
        return redirect()->route('cms.faqs.create')->with(['status'=> $result['status'],'message'=> $result['message']]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = $this->faqService->destroy($id);
        return response()->json(['status' => $result['status'], 'message' => $result['message']]);
    }
    /**
     * Publish the specified resource from storage.
     */
    public function publish(string $id)
    {
        $result = $this->faqService->publish($id);
        return response()->json(['status' => $result['status'], 'message' => $result['message']]);
    }



}
