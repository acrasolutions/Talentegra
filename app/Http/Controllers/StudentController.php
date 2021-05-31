<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Grade_level;
use App\Models\Student_posts;
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

    public function StudentViewPost(Request $request)
    {
        // dd($request->all());
        $grade_All = DB::table('grade_level')->get()->all();
        $subjects = DB::table('subjects')->get()->all();
        $obs_cat= DB::table('student_posts')->where('id', $request->porequest)->orderBy('id','desc')->get();
     return view('student.stu_view_post', compact('grade_All','subjects','obs_cat'));
    }

    public function PostRequirement(Request $request)
    {
        $grade_All = DB::table('grade_level')->get()->all();
        $subjects = DB::table('subjects')->get()->all();
      
     return view('student.stu_post_requirement', compact('grade_All','subjects'));
    }

    public function RepostRequirement(Request $request)
    {
        $sub = $request->st_subjects;
        $charge = $request->st_budget;
        $meet_op = $request->meeting_options;
        // dd($request->meeting_options);
        
                $req_post = new Student_posts;
                $req_post->user_id = Auth::user()->id;
                $req_post->st_location =$request->st_location;
                $req_post->st_requirement =$request->st_requirement;
                $req_post->st_level =$request->st_level;
                $req_post->st_i_want =$request->st_i_want;
                $req_post->st_gender_prfer =$request->st_gender_prfer;
                $req_post->tut_wantd =$request->tut_wantd;
                $req_post->i_need_smeone =$request->i_need_smeone;
                $req_post->km_travel =$request->km_travel;
                $req_post->meeting_options =json_encode($meet_op, True);
                $req_post->st_subjects =json_encode($sub, True);
                $req_post->st_budget =json_encode($charge, True);
        
                $req_post->save();
        
               
                return redirect()->route('student_dashboard')->with('success', 'Your requirement has been posted.');

        // $update_stu_post = [
        //     'st_location' => $request->st_location,
        //     'st_requirement' => $request->st_requirement,
        //     'st_level' => $request->st_level,
        //     'st_i_want' => $request->st_i_want,
        //     'st_gender_prfer' => $request->st_gender_prfer,
        //     'tut_wantd' => $request->tut_wantd,
        //     'i_need_smeone' => $request->i_need_smeone,
        //     'km_travel' => $request->km_travel,
        //     'meeting_options' => $request->meeting_options,
        //     'status' => 1,
        //     'st_subjects' => json_encode($sub, True),
        //     'st_budget' => json_encode($charge, True),
            
        // ];
       
        // Student_posts::whereId($request->id)->update($update_stu_post);
      
        
    }


    public function StudentRePost(Request $request)
    {
        $grade_All = DB::table('grade_level')->get()->all();
        $subjects = DB::table('subjects')->get()->all();
        $repost_details=Student_posts::whereId($request->post_id)->get()->all();
        return view('student.stu_post_repost', compact('repost_details','grade_All','subjects'));
    }

    public function StudentDeletePost(Request $request)
    {
        $update_status = [
            'status' => 0
        ];
        Student_posts::whereId($request->post_id)->update($update_status);
        return redirect()->route('student_dashboard')->with('error', 'This requirement is closed..');
    }

    public function PostRequirementAdd(Request $request)
    {
$sub = $request->st_subjects;
$charge = $request->st_budget;
$meet_op = $request->meeting_options;
// dd($request->meeting_options);

        $req_post = new Student_posts;
        $req_post->user_id = Auth::user()->id;
        $req_post->st_location =$request->st_location;
        $req_post->st_requirement =$request->st_requirement;
        $req_post->st_level =$request->st_level;
        $req_post->st_i_want =$request->st_i_want;
        $req_post->st_gender_prfer =$request->st_gender_prfer;
        $req_post->tut_wantd =$request->tut_wantd;
        $req_post->i_need_smeone =$request->i_need_smeone;
        $req_post->km_travel =$request->km_travel;
        $req_post->meeting_options =json_encode($meet_op, True);
        $req_post->st_subjects =json_encode($sub, True);
        $req_post->st_budget =json_encode($charge, True);

        $req_post->save();

       
        return redirect()->route('student_dashboard')->with('success', 'Your requirement has been posted.');
    }
    public function StudentMyPosts()
    {
    return view('student.stu_my_posts');
    }

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
            return redirect()->route('student.ProfileSettings')->with('error', 'Something went wrong');
        
       }
       else {
        return redirect()->route('student.ProfileSettings')->with('success', 'Profile Picture Updated');
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
      
       return redirect()->route('student.ProfileSettings')
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
