<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandsStoreRequest;
use App\Models\Brands;
use App\Services\BrandsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class BrandsController extends Controller
{

    protected BrandsService $brands;

    public function __construct(BrandsService $brands)
    {
        $this->brands = $brands;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brands::all();
        return view('cms.brands.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandsStoreRequest $request)
    {
        $result = $this->brands->store($request);
        return redirect()->route('cms.brands.index')
            ->with('status', $result['status'])
            ->with('message', $result['message']);
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
        $result = $this->brands->destroy($id);
        return response()->json([
            'status' => $result['status'],
            'message' => $result['message']
        ]);
    }
}
