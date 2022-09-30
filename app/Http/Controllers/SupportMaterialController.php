<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSupportMaterialRequest;
use App\Http\Requests\UpdateSupportMaterialRequest;
use App\Models\SupportMaterial;

class SupportMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSupportMaterialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSupportMaterialRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SupportMaterial  $supportMaterial
     * @return \Illuminate\Http\Response
     */
    public function show(SupportMaterial $supportMaterial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SupportMaterial  $supportMaterial
     * @return \Illuminate\Http\Response
     */
    public function edit(SupportMaterial $supportMaterial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSupportMaterialRequest  $request
     * @param  \App\Models\SupportMaterial  $supportMaterial
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSupportMaterialRequest $request, SupportMaterial $supportMaterial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SupportMaterial  $supportMaterial
     * @return \Illuminate\Http\Response
     */
    public function destroy(SupportMaterial $supportMaterial)
    {
        //
    }
}
