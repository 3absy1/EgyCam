<?php

namespace App\Http\Controllers;

use App\Http\Resources\UsagePolicy\UsagePolicyCollection;
use App\Http\Resources\UsagePolicy\UsagePolicyResource;
use App\Models\UsagePolicy;
use App\Http\Requests\StoreUsagePolicyRequest;
use App\Http\Requests\UpdateUsagePolicyRequest;

class UsagePolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $police=UsagePolicy::all();
        return new UsagePolicyCollection($police);
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
     * @param  \App\Http\Requests\StoreUsagePolicyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsagePolicyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UsagePolicy  $usagePolicy
     * @return \Illuminate\Http\Response
     */
    public function show(UsagePolicy $usagePolicy)
    {
        return new UsagePolicyResource($usagePolicy);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UsagePolicy  $usagePolicy
     * @return \Illuminate\Http\Response
     */
    public function edit(UsagePolicy $usagePolicy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUsagePolicyRequest  $request
     * @param  \App\Models\UsagePolicy  $usagePolicy
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsagePolicyRequest $request, UsagePolicy $usagePolicy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UsagePolicy  $usagePolicy
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsagePolicy $usagePolicy)
    {
        //
    }
}
