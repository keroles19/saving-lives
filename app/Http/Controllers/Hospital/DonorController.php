<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Main\MainProcessController;
use App\Models\Donor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class DonorController extends MainProcessController
{


    public function __construct(Donor $model)
    {
        parent::__construct($model);
    }


    public function index(Request $request){

        $model = $this->getModelWithSearch('receiver',$request);
        return view('hospital.donor.donors',compact('model'));
   }

   public function show($id){
        return $this->getItem($id,'hospital.donor.show');
   }

}
