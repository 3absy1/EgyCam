<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderDetails\OrderDetailsCollection;
use App\Http\Resources\Orders\OrdersCollection;
use App\Http\Resources\Orders\OrdersResource;
use App\Http\Resources\Services\ServicesCollection;
use App\Http\Resources\Services\ServicesResource;
use App\Models\Orders;
use App\Http\Requests\StoreOrdersRequest;
use App\Http\Requests\UpdateOrdersRequest;
use App\Models\Services;
use Illuminate\Http\Request;

class MainOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,int $servicesID)
    {

        $user_id=$request->user()->id;
        $user_name=$request->user()->name;
        $service=Services::where('id', $servicesID)->get();


        $user = Orders::where('user_id', $user_id )->where('services_id', $servicesID)->get();
//        return new OrderDetailsCollection($user);
        return [
            'Name'=>$user_name,
            'DeliveryTo' => new OrderDetailsCollection($user),
            'YourOrder' => new ServicesCollection($service),
        ];

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
     * @param  \App\Http\Requests\StoreOrdersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrdersRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(Orders $orders)
    {
        return new OrdersResource($orders);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrdersRequest  $request
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrdersRequest $request, Orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orders $orders)
    {
        //
    }
}
