<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use App\Http\Requests\MakeOperationRequest;
use App\Models\Donor;
use App\Models\Receiver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OperationController extends Controller
{
    // emotify('success', 'You are awesome, your data was successfully created');
    public function index(){
        return view('hospital.operation.makeoperation');
    }

    public function make(MakeOperationRequest $request){

        // check if donor is free
        $donor = $this->donor($request->donor_id);
        //check if receiver is free
        $receiver = $this->receiver($request->receiver_id);
        // set donor_id = donor id on receivers table

        if(!$donor || !$receiver){
             return redirect()->back()->withErrors('The Donor Or Receiver Is Not available');
        }
        try {
            DB::transaction(function() use($receiver,$donor) {
                $receiver->update([
                    'donor_id' => $donor->id,
                    'hospital_id' => auth()->id()
                ]);
                $donor->update([
                    'hospital_id' => auth()->id()
                ]);
            });

          return redirect()->back()->with('success','Operation Success');
        }catch (\Exception $e){
         return redirect()->back()->withErrors( 'something error Please reload page and try again');
        }
        //set hospital_id on donor table and receiver table

    }


    private function donor($donor_id){

        return  Donor::where('national_number',$donor_id)->with('organ:id,organ_name')
           ->whereDoesntHave('receiver')->whereDoesntHave('hospital')->where('status',1)->first();
    }

    private function receiver($receiver_id){
       return Receiver::where('national_number',$receiver_id)->with('organ:id,organ_name')
           ->whereDoesntHave('donor')->whereDoesntHave('hospital')->where('status',1)->first();
    }

    public function show($id){
        $model = Receiver::with('organ:id,organ_name')
           ->with('donor')->with('hospital')->where('status',1)->findOrFail($id);
        return view('hospital.operation.show',compact('model'));
    }

}
