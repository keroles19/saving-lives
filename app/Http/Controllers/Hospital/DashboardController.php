<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use App\Models\Donor;
use App\Models\Obligation;
use App\Models\Receiver;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    // index method
    public function index(){
        $operation = $this->operation();
        $donor = $this->donorAvailable();
        $receiver = $this->receiverAvaible();
        $obligation = $this->obligation();


        return view('hospital.index')->with([
            'operation'=>$operation,
            'donor'=>$donor,
            'receiver'=>$receiver,
            'obligation'=>$obligation
        ]);
    }
    // end index method


    //  operation count
    private function operation(){
        //with('receivers')->with('donors')->get();
        return auth('hospital')->user()->receivers()->with('donor')->get();
    }

    private function donorAvailable(){
        return Donor::where('status',1)->whereDoesntHave('receiver')->count();
    }

    private function receiverAvaible(){
        return Receiver::where('status',1)->whereDoesntHave('donor')->count();
    }

    private function obligation(){
        return Obligation::count();
    }

}
