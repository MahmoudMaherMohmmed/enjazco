<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\StoreSubscribeRequest;
use App\Http\Requests\Dashboard\UpdateSubscribeRequest;
use App\Models\Subscribe;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscribes = Subscribe::latest()->get();

        return view('dashboard.subscribes.index', compact('subscribes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubscribeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscribe $subscribe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscribe $subscribe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubscribeRequest $request, Subscribe $subscribe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscribe $subscribe)
    {
        //
    }
}
