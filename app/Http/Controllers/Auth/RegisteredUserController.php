<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Donor;
use App\Models\Organ;
use App\Models\Receiver;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{

    private function getOrgan(){
        return Organ::all();
    }

    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $organ = $this->getOrgan();
        return view('auth.register',compact('organ'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $guard = $request->guard;
        $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', $guard == 'donor'? 'unique:donors' :'unique:receivers' ],
            'phone'=>['required','numeric','digits_between:11,20'],
            'national_number' =>['numeric','digits:14','required',$guard == 'donor'? 'unique:donors' :'unique:receivers'],
            'blood_type'=>['required','in:A,A+,B-,B+,AB+,AB-,O-,O+'],
            'organ_id'=>['required','exists:organs,id'],
            'guard'=>['required','in:donor,receiver']
        ]);

        try{
            if($guard == 'donor'){
                $user = Donor::create(
                    $request->except('guard')
                );
            }else{
                $user = Receiver::create(
                    $request->except('guard')
                );
            }


//        event(new Registered($user));

//        Auth::login($user);

            return redirect('/article')->with('success',"Now You Are Member Of My Society");
        }catch (\Exception $e){
            return back()->withErrors($e->getMessage());
        }

    }
}
