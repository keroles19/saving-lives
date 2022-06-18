<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Main\MainProcessController;
use App\Models\Receiver;
use Illuminate\Http\Request;

class ReceiverController extends MainProcessController
{


    public function __construct(Receiver $model)
    {
        parent::__construct($model);
    }


    public function index(Request $request){

        $model = $this->getModelWithSearch('donor',$request);
        return view('hospital.receiver.receiver',compact('model'));
    }

    public function show($id){
        return $this->getItem($id,'hospital.receiver.show');
    }
}
