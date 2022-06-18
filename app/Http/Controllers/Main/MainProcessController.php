<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class MainProcessController extends Controller
{

    // established environment

    protected $model;

    protected function __construct(Model $model){
        $this->model = $model;
    }

    protected function getModelWithSearch($relation,$request){
            return $this->model::with('organ:id,organ_name')
                ->where('status',1)->whereDoesntHave($relation)
                ->when($request->search,function ($query) use ($request){
                    return
                        $query->where('blood_type','like','%'.$request->search.'%')
                        ->orWhere('national_number','like','%'.$request->search.'%')
                        ->orWhere('full_name','like','%'.$request->search.'%')
                        ->orWhere('address','like','%'.$request->search.'%')
                        ->orWhere('email','like','%'.$request->search.'%')
                        ->orWhereHas('organ',function ($q) use ($request){
                            return $q->where('organ_name','=','%'.$request->search.'%');
                        });
                })->latest()->paginate(20);

    }






    protected function getAll(){
       return $this->model->all();
    }

    protected function getItem($id,$view){
       $model =  $this->model->with('organ:id,organ_name')->where('status',1)->findOrFail($id);
       return view($view,compact('model'));
    }


    protected function main($view){
        $model = $this->getAll();
        return view($view,compact('model'));
    }

    protected function filter($field,$search){
        $model = $this->model->where($field,'like %'.$search.'%')->get();
        return redirect()->back()->with(['model'=>$model]);
    }


}
