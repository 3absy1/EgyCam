<?php

namespace App\Http\Controllers;

use App\Http\Resources\Cities\CitiesCollection;
use App\Http\Resources\Cities\CitiesResource;
use App\Models\Cities;
use App\Http\Requests\StoreCitiesRequest;
use App\Http\Requests\UpdateCitiesRequest;
use App\Models\User;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $city=Cities::all();
        return new CitiesCollection($city);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(int $cityID)
    {
        return view('admin.editcities',[
            'cities'=>Cities::all()->where('id',$cityID),
            'cityID' => $cityID
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCitiesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCitiesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cities  $cities
     * @return \Illuminate\Http\Response
     */
    public function show(Cities $cities)
    {
        return new CitiesResource($cities);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cities  $cities
     * @return \Illuminate\Http\Response
     */
    public function edit(Cities $cities)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCitiesRequest  $request
     * @param  \App\Models\Cities  $cities
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCitiesRequest $request, int $cityID)
    {
        $edit = Cities::find($cityID);
        $edit->name = $request->input('name');
        $edit->update();
        return redirect('Cities')->with('status','Updated Successfully');
//dd($cityName);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cities  $cities
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cities $cities)
    {
        //
    }
}
