<?php

namespace App\Http\Controllers;

use App\Http\Requests\Register\RegisterUser;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Http\Resources\Register\UserCollection;
use \Illuminate\Http\Request;
use App\Http\Resources\Register\UserResource;
use App\Models\User;
class RegisterUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $customer=User::all();
//        return new UserCollection($customer);

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
    public function store(RegisterUser $request)
    {
        $user=User::create($request->all());
        return response()->json([
            'token' => $user->createToken("API TOKEN")->plainTextToken
        ], 200);
        return new UserResource($user);

    }
//    public function register(StoreCustomerRequest $request)
//    {
//        return new UserResource(Customer::create($request->all()));
//
//    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(User $customer)
    {
//        return new UserResource($customer);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(User $customer)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\User  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, User $user,int $id)
    {
        $user->where('id', $id)->update($request->validated());

//        $user->where('id', $id)->update($request->validated());
//        $user->update($request->all());

    }
//    public function update(RegisterUser $request,$id)
//    {
//     $update=User::where('category_id', $id)->get();
//     $update->update($request->all());
//
////        $request->validate([
////
////            'name'=>'required'
////        ]);
////        $update=User::find($id);
////        $update->name=$request->name;
////        $update->update();
////        return response()->json(['message'=>'update successfully'],200);
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $customer)
    {
        //
    }
}
