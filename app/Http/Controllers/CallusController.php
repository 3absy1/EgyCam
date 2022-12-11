<?php

namespace App\Http\Controllers;

use App\Http\Resources\CallUs\CallUsCollection;
use App\Http\Resources\CallUs\CallUsResource;
use App\Models\Callus;
use App\Http\Requests\StoreCallusRequest;
use App\Http\Requests\UpdateCallusRequest;

class CallusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $callus=Callus::all();
        return new CallUsCollection($callus);
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
     * @param  \App\Http\Requests\StoreCallusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCallusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Callus  $callus
     * @return \Illuminate\Http\Response
     */
    public function show(Callus $callus)
    {
        return new CallUsResource($callus);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Callus  $callus
     * @return \Illuminate\Http\Response
     */
    public function edit(Callus $callus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCallusRequest  $request
     * @param  \App\Models\Callus  $callus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCallusRequest $request, Callus $callus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Callus  $callus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Callus $callus)
    {
        //
    }
}
