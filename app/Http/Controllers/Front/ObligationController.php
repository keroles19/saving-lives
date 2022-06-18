<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ObligationRequest;
use App\Models\Obligation;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use stdClass;

class ObligationController extends Controller
{
    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'full_name'=>'required|min:8|max:50',
            'national_number'=>'required|min:14|unique:obligations,national_number',
            'obligation_accept'=>'required|in:1',
            'number'=>'required|unique:obligations,number'
        ]);

        if($validator->fails())
        {
          return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else
        {
            Obligation::create($request->all());
            return response()->json(['success'=>'Your Obligation Has Been Register :) Thank You For Your Cooperated']);
        }

//
//        try {
//            Obligation::create($request->all());
//            return back()->with('success','Your Obligation Has Been Register :) Thank You For Your Cooperated');
//
//        }
//        catch (\Exception $e){
//            return back()->withErrors('Please try again');
//        }
    }
}
