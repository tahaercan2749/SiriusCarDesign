<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Services\OurValuesService;
use Illuminate\Http\Request;

class OurValuesController extends Controller
{

    protected OurValuesService $ourValuesService;

    public function __construct(OurValuesService $ourValuesService)
    {
        $this->ourValuesService = $ourValuesService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = $this->ourValuesService->index();
        return view('cms.ourValues.index')->with('values', $result['values']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.ourValues.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $result = $this->ourValuesService->store($request);
        return redirect()->route('cms.values.index')
            ->with("status", $result['status'])
            ->with("message", $result['message']);
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
        $result = $this->ourValuesService->edit($id);
        return view('cms.ourValues.edit')
            ->with("value", $result['value'])
            ->with("status", $result['status'])
            ->with("message", $result['message']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $result = $this->ourValuesService->update($request, $id);
        return redirect()->route('cms.values.index')
            ->with('status', $result['status'])
            ->with("message", $result['message']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = $this->ourValuesService->destroy($id);
        return redirect()->route('cms.values.index')
            ->with("status", $result['status'])
            ->with("message", $result['message']);
    }
}
