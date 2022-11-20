<?php

namespace App\Http\Controllers;

use App\Http\Requests\Register\RegisterCustomer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Http\Resources\Register\CustomerCollection;
use App\Http\Resources\Register\CustomerResource;
use App\Models\Customer;
use App\Models\User;

class RegisterCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer=User::all();
        return new CustomerCollection($customer);

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
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        $user=User::create($request->all());
        return response()->json([
            'token' => $user->createToken("API TOKEN")->plainTextToken
        ], 200);
        return new CustomerResource($user);

    }
//    public function register(StoreCustomerRequest $request)
//    {
//        return new CustomerResource(Customer::create($request->all()));
//
//    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(User $customer)
    {
        return new CustomerResource($customer);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
