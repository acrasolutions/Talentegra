<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subjects;
use App\Models\Profiles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class TeachersController extends Controller
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

     
    public function TeacherAddIam(Request $request)
    {
        $update_iam_teacher = [
            'iam_type' => $request->iam_type
        ];
        $user_id = Auth::user()->id;
        User::whereId($user_id)->update($update_iam_teacher);
        //add profile
        $iamCompany_add = new Profiles;
        $iamCompany_add->user_id = Auth::user()->id;
        $iamCompany_add->save();

         if($request->iam_type == 'Tutoring Company'){
         return redirect()->route('teacher.teacherIamCompany')->with('success', 'Email Verified');
        }
        return redirect()->route('teacher.TeacherBasicDetails')->with('success', 'Email Verified');
    } 

        public function teacherIamCompany()
        {
            
        return view('teacher.teacher_iamCompany');
    
        }
        public function teacherIamCompany_add(Request $request)
        {
            // dd($request->all());
            $update_tech_iam_profile = [
                'fullname' => $request->fullname,
                'company_name' => $request->company_name,
                'role_job' => $request->role_job,
                'display_name' => $request->display_name,
            ];

            $user_data=Profiles::where('user_id', Auth::user()->id)->update($update_tech_iam_profile);
            return redirect()->route('teacher.TeacherBasicDetails')
            ->with('success','Role Added');
        }

        public function TeacherBasicDetails()
        {
            return view('teacher.teacher_basic_details');
    
        }

        public function UserAddress()
        {
            return view('teacher.teacher_address');
    
        }

        public function UserPhone()
        {
            return view('teacher.user_phone');
    
        }

        public function TeacherBasicDetails_add(Request $request)
        {
          
            $update_basic_iam_profile = [
                'speciality_strength' => $request->speciality_strength,
                'gender' => $request->gender,
                'dob' => $request->dob,
            ];
            Profiles::where('user_id', Auth::user()->id)->update($update_basic_iam_profile);
            return redirect()->route('teacher.UserAddress')
            ->with('success','Personal Details Updated');
    
        }
        
        public function AddUserAddress(Request $request)
        {
            $user_address = [
                'location' => $request->location,
                'postalcode' => $request->postalcode,
               
            ];
            Profiles::where('user_id', Auth::user()->id)->update($user_address);
            return redirect()->route('teacher.UserPhone')
            ->with('success','Address Saved');
    
        }

        public function AddUserPhone(Request $request)
        {
            $user_phone = [
                'phone' => $request->phone,
            ];
            User::whereId(Auth::user()->id)->update($user_phone);
            return redirect()->route('teacher.UserPhone')
            ->with('success','Phone Number Saved');
    
        }

        public function DeleteUserPhone(Request $request)
        {
            $user_delete = [
                'phone' => null,
            ];
            User::whereId(Auth::user()->id)->update($user_delete);
            return redirect()->route('teacher.UserPhone')
            ->with('warning','Phone Number Deleted');
    
        }
    
}
