<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subjects;
use App\Models\Profiles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class StudentController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function UpdateProfileImage(Request $request)
    {
        $thumb_old=DB::table('users')->select('profile_img')->where('id', Auth::user()->id)->first();
      
        if($request->hasFile('profile_img')){
            if($thumb_old->profile_img != null)
            {
                $old_thumb=$thumb_old->profile_img;
                $path = public_path().'/uploads/profile_image/';
                $file_old = $path.$old_thumb;
                unlink($path.$old_thumb);
            }
            $profileImage = $request->file('profile_img');
            $input['profile_img'] = time().'.'.$profileImage->getClientOriginalName();
            $profileImage->move(public_path('uploads/profile_image'),time().'.'.$profileImage->getClientOriginalName());
            $img = $input['profile_img'];
       
            $update_data = [
                           'profile_img' =>  $img
                           
                       ];
            $update_data=User::whereId(Auth::user()->id)->update($update_data);
       
        if(!$update_data){
            return redirect()->route('ProfileSettings')->with('error', 'Something went wrong');
        
       }
       else {
        return redirect()->route('ProfileSettings')->with('success', 'Profile Picture Updated');
       }  }

   } 

   public function DeleteProfileImage(Request $request)
   {
    $thumb_old=DB::table('users')->select('profile_img')->where('id', Auth::user()->id)->first();
    $old_thumb=$thumb_old->profile_img;
    $path = public_path().'/uploads/profile_image/';
    $file_old = $path.$old_thumb;
    unlink($path.$old_thumb);

    $user_profile_img = [
        'profile_img' => null,
    ];
    User::whereId(Auth::user()->id)->update($user_profile_img);
      
       return redirect()->route('ProfileSettings')
                       ->with('success','Profile Picture Deleted!');

   }
   public function ProfileSettings(Request $request)
   {
    return view('student.profile_settings');
   }

   public function UpdateName(Request $request)
   {
     $user_name = [
                'name' => $request->name,
            ];
            User::whereId(Auth::user()->id)->update($user_name);
            return redirect()->route('student.ProfileSettings')
            ->with('success','Name Updated');
   }

  
   


    
}
