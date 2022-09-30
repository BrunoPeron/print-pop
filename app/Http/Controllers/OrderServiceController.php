<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderServiceRequest;
use App\Http\Requests\UpdateOrderServiceRequest;
use App\Models\OrderService;

class OrderServiceController extends Controller
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
     * @param  \App\Http\Requests\StoreOrderServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderServiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderService  $orderService
     * @return \Illuminate\Http\Response
     */
    public function show(OrderService $orderService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderService  $orderService
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderService $orderService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderServiceRequest  $request
     * @param  \App\Models\OrderService  $orderService
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderServiceRequest $request, OrderService $orderService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderService  $orderService
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderService $orderService)
    {
        //
    }
}
