<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\EmailChangeNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class EmailChangeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Change Controller
    |--------------------------------------------------------------------------
    |
    | This controller allows the user to change his email address after he
    | verifies it through a message delivered to the enew email address.
    | This uses a temporarily signed url to validate the email change.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Only the authenticated user can change its email, but he should be able
        // to verify his email address using other device without having to be
        // authenticated. This happens a lot when they confirm by phone.
        $this->middleware('auth')->only('change');

        // A signed URL will prevent anyone except the User to change his email.
        $this->middleware('signed')->only('verify');
    }

    /**
     * Changes the user Email Address for a new one
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function change(Request $request)
    {
        if($request->email == Auth::user()->email){
            return redirect()->route('student.ProfileSettings')
            ->with('warning','New email and old email cannot be same');
           }

        $request->validate([
            'email' => 'required|email|unique:users'
        ]);

       
        // Send the email to the user
        Notification::route('mail', $request->email)
            ->notify(new EmailChangeNotification(Auth::user()->id));

        // Return the view
        return back()->with([
            'email_changed' => $request->email
        ])->with('infomail','Before changing email address, you should verify your email address by clicking on the link we just emailed to you.');
    }

    /**
     * Verifies and completes the Email change
     *
     * @param Request $request
     * @param User $user
     * @param string $email
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function verify(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users'
        ]);
        

        $update_data = [
            'email' => $request->email
           
        ];

        $update_data=User::whereId($request->user)->update($update_data);

        // And finally return the view telling the change has been done
        // return response()->view('student.student_dashboard');
       
        Auth::logout();
        return redirect('/login')
        ->with('info', 'Email Address Updated.. Please Login to continue');
      
    }

}