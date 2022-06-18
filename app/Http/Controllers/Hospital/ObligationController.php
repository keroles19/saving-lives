<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckObligationRequest;
use App\Http\Requests\ObligationRequest;
use App\Models\Obligation;
use Illuminate\Http\Request;

class ObligationController extends Controller
{
    public function index(CheckObligationRequest $request){

       $model = Obligation::when($request->search,function ($query) use($request){
          $query->where('national_number',$request->search);
       })->get();

          return view('hospital.obligation',compact('model'));

    }
}
