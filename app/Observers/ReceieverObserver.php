<?php

namespace App\Observers;

use App\Models\Receiver;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Nova;

class ReceieverObserver
{

    public $afterCommit = true;


    public function updated(Receiver $receiver)
    {

        Nova::whenServing(function (NovaRequest $request) use ($receiver) {
            if(!isAdmin() || auth()->user()->can('manageHospital')){
                $id = auth()->user()->id;
                Receiver::findOrFail($receiver->id)->update(
                    ['hospital_id'=> $id]
                );
                $receiver->donor()->update(['hospital_id'=>$id]);

            }
            // Only invoked during Nova requests...
        });
    }
}
