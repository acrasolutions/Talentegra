<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subjects;
use App\Models\Profiles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Nicolaslopezj\Searchable\SearchableTrait;


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
    

    public function TutorView_sPost(Request $request)
    {
       
        //  dd($request->all());
        $grade_All = DB::table('grade_level')->get()->all();
        $subjects = DB::table('subjects')->get()->all();
        $obs_cat= DB::table('student_posts')->where('id', $request->porequest)->orderBy('id','desc')->get();
     return view('teacher.teac_view_post', compact('grade_All','subjects','obs_cat'));
    }


    public function TeacherDashboard(Request $request)
        {
            return view('teacher.teacher_dashboard');
        }

        public function TutorViewProfile(Request $request)
        {
            $teacher_id=$request->t_view;
            $t_info = Profiles::where('user_id', $teacher_id)->get('subject_tech')->toArray();
         
foreach ($t_info as $value){
foreach ($value as $rooms){
  $t_sub[] = json_decode($rooms, TRUE);
}
}
//  dd($t_sub[0]);
    $t_des = Profiles::where('user_id', $teacher_id)->get('profile_description')->pluck('profile_description');      
    $t_des_sec= json_decode($t_des[0], true);
    $t_des_ext=str_replace(array("\r\n"), '', $t_des_sec[0]['profile_des']);
   
    $f_f_user = User::where('id', $teacher_id)->get()->first();
    $f_det = Profiles::where('user_id', $teacher_id)->get()->first();

//sidebar details
    $teach_detl = Profiles::where('user_id', $teacher_id)->get('teaching_details')->toArray();
    foreach ($teach_detl as $value){
        foreach ($value as $det){
          $te_det[] = json_decode($det, TRUE);
          foreach ($te_det as $s_ex){
            $ss_fin=$s_ex[0];
          }
        }
        }

        $profs_info = Profiles::where('user_id', $teacher_id)->get('professional_exp')->toArray();
        foreach ($profs_info as $value){
        foreach ($value as $pr_det){
          $fi_pro[] = json_decode($pr_det, TRUE);
          foreach ($fi_pro as $pro_lbs){
            $ols=$pro_lbs;
          }
        }
        }

        $edu_t_info = Profiles::where('user_id', $teacher_id)->get('user_education')->toArray();
        foreach ($edu_t_info as $value){
        foreach ($value as $edua){
          $edu_t_info_a[] = json_decode($edua, TRUE);
          foreach ($edu_t_info_a as $edu_fins){
            $oel=$edu_fins;
          }
        }
        }
   
            return view('teacher.t_profile_view', compact('t_sub','t_des_ext','f_det','f_f_user','ss_fin','ols','oel'));
        }

    public function autocomplete(Request $request)
    {
        $data = DB::table('subjects')->where('subject_name','LIKE','%'.$request->search."%")->pluck('subject_name');
   
        return response()->json($data);
    }
     
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
         return redirect()->route('teacher.teacherIamCompany')->with('success', 'Details Added');
        }
        return redirect()->route('teacher.TeacherBasicDetails')->with('success', 'Details Added');
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
            $basic_info = Profiles::where('user_id', Auth::user()->id)->get()->first();
            return view('teacher.teacher_basic_details', compact('basic_info'));
    
        }

        public function UserAddress()
        {
            $detail = Profiles::select('location','postalcode')->where('user_id', Auth::user()->id)->get()->first();
            return view('teacher.teacher_address', compact('detail'));
    
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
