<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
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

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'user_type' => 'required|max:255',
            'password' => 'required|string|confirmed|min:8',
        ]);
    // dd($request->user_type);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'user_type' => $request->user_type,
            'only_acc' => $request->only_acc,
            'password' => Hash::make($request->password),
        ]);

        if($request->user_type == 'Student/Parent'){
            $update_data = [
                'iam_type' => 'Student/Parent'
            ];
      
            $user_id = $user->id;
            $user_data=User::whereId($user_id)->update($update_data);
        }
           
        event(new Registered($user));
          Auth::login($user);
          
        // return view('auth.verify-email');

        return redirect(RouteServiceProvider::HOME);
      
    }
}
