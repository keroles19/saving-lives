<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use App\Models\User;
use Illuminate\Http\Request;

class AboutController extends Controller
{
  public function about(){
      $hospitals = Hospital::where('status','1')->with(['country'=>function ($query){
          $query->select('id','country_name');
      }])->get();
      return view('front.about  ',compact('hospitals'));
  }
}
