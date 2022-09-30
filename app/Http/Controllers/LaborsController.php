<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLaborsRequest;
use App\Http\Requests\UpdateLaborsRequest;
use App\Models\Labors;

class LaborsController extends Controller
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
     * @param  \App\Http\Requests\StoreLaborsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLaborsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Labors  $labors
     * @return \Illuminate\Http\Response
     */
    public function show(Labors $labors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Labors  $labors
     * @return \Illuminate\Http\Response
     */
    public function edit(Labors $labors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLaborsRequest  $request
     * @param  \App\Models\Labors  $labors
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLaborsRequest $request, Labors $labors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Labors  $labors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Labors $labors)
    {
        //
    }
}
