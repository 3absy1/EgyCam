<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

//    public function update(Request $request,$id)
//    {
////        $update=User::where('category_id', $id)->get();
////        $update->update($request->all());
//
//        $request->validate([
//
//            'name'=>'required',
//        ]);
//        $update=User::find($id);
//        $update->name=$request->name;
//        $update->update();
//        return response()->json(['message'=>'update successfully'],200);
//    }
}
