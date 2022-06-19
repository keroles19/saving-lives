<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Hospital;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
       $articles = Article::where('status','1')->latest()->take(6)->get();
       $hospitals = Hospital::where('status','1')->with(['country'=>function ($query){
           $query->select('id','country_name');
       }])->get();

       return view('front.index',compact(['articles','hospitals']));

   }
}
