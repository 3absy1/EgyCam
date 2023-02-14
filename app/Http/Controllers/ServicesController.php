<?php

namespace App\Http\Controllers;

use App\Http\Resources\Services\ServicesCollection;
use App\Http\Resources\Services\ServicesResource;
use App\Models\Services;
use App\Http\Requests\StoreServicesRequest;
use App\Http\Requests\UpdateServicesRequest;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(int $subCategoryID)
    {
        $services = Services::where('subcategory_id', $subCategoryID)->get();
        return new ServicesCollection($services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(int $servicesID)
    {
        return view('admin.editservices',[
            'services'=>Services::all()->where('id',$servicesID),
            'servicesID' => $servicesID
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServicesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServicesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
    {
        return new ServicesResource($services);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServicesRequest  $request
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServicesRequest $request,  int $servicesID)
    {
        $edit = Services::find($servicesID);
        $edit->name = $request->input('name');
        $edit->description = $request->input('description');
        $edit->price = $request->input('price');
        $edit->update();
        return redirect('Services')->with('status','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $services)
    {
        //
    }
}
