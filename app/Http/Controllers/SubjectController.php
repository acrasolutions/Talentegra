<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subjects;
use App\Models\Profiles;
use App\Models\Degree_type;
use App\Models\Association;
use App\Models\sub_levels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class SubjectController extends Controller
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
     
    public function TutorsSubject (Request $request)
    {
       
        $subject_data=Subjects::get();
        $level_data=sub_levels::get();
      
      return view('teacher.tutorSubject', compact('level_data','subject_data'));
      
    }
        public function AddtutorSubject(Request $request)
        {
        
        if (Subjects::where('subject_name', '=', $request->subject_tech)->exists()) {

            $subject_id = Subjects::select('subject_name', 'id')->where('subject_name', $request->subject_tech)->get()->first();
            $subject_id = $subject_id->id;
            
            }
            else{

            $new_subject = new Subjects;
            $new_subject->subject_name = $request->subject_tech;
            $new_subject->save();
            $subject_id = $new_subject->id;
            }

            $existing_data = Profiles::where('user_id', Auth::user()->id)->firstOrFail();
            $tempArray = json_decode($existing_data->subject_tech, true);
           
            if($tempArray==null){

                $messages[] = array(
                    'subject' => $subject_id,
                    'from_level' => $request->from_level,
                    'to_level' => $request->to_level,
                );

                $messages=json_encode($messages, true);

                DB::table('profiles')
                ->where('user_id', Auth::user()->id)
                ->update(['subject_tech' => $messages]);
            }
            else{
            $messages[] = array(
                'subject' => $subject_id,
                'from_level' => $request->from_level,
                'to_level' => $request->to_level,
            );
           

           $finl_mer=array_merge($tempArray, $messages);
            $final_dat=json_encode($finl_mer, true);
           
            DB::table('profiles')
            ->where('user_id', Auth::user()->id)
            ->update(['subject_tech' => $final_dat]);
        }

        return redirect()->route('teacher.TutorsSubject')
        ->with('success','Subject Added');
        }


        public function AddNewtutorSubject (Request $request)
    {
     
        if (Subjects::where('subject_name', '=', $request->add_subject)->exists()) {
           
            return redirect()->route('teacher.TutorsSubject')
            ->with('warning','Subject Exists, Please Select Subject.');
         }

       else{
        $new_subject = new Subjects;
        $new_subject->subject_name = $request->add_subject;
        $new_subject->save();

        $existing_data = Profiles::where('user_id', Auth::user()->id)->firstOrFail();
        $tempArray = json_decode($existing_data->subject_tech, true);

        if($tempArray==null){
            $messages[] = array(
                'subject' =>  $new_subject->id,
                'from_level' => $request->add_from_level,
                'to_level' => $request->add_to_level,
            );

            $messages=json_encode($messages, true);

            DB::table('profiles')
            ->where('user_id', Auth::user()->id)
            ->update(['subject_tech' => $messages]);
        }
        else{
        $messages[] = array(
            'subject' => $new_subject->id,
            'from_level' => $request->add_from_level,
            'to_level' => $request->add_to_level,
        );

       $finl_mer=array_merge($tempArray, $messages);
        $final_dat=json_encode($finl_mer, true);
       
        DB::table('profiles')
        ->where('user_id', Auth::user()->id)
        ->update(['subject_tech' => $final_dat]);
    }
       }
       return redirect()->route('teacher.TutorsSubject')
       ->with('success','Subjects Saved');
      
    }

    public function UserEducation (Request $request)
    {

      return view('teacher.usereducation');
      
    }
    public function AddUserEducation (Request $request)

    {

        $existing_edu = Profiles::where('user_id', Auth::user()->id)->firstOrFail();
        $eduArray = json_decode($existing_edu->user_education, true);
       
        if($eduArray==null){

            $education[] = array(
                'institution' => $request->institution,
                'deg_type' => $request->degree_type,
                'deg_name' => $request->degree_name,
                'startdate' => $request->edu_start,
                'enddate' => $request->edu_end,
                'association' => $request->association,
                'speciality' => $request->speciality,
                'score' => $request->score,
            );

            $education=json_encode($education, true);

            DB::table('profiles')
            ->where('user_id', Auth::user()->id)
            ->update(['user_education' => $education]);
        }
        else{
        $education[] = array(
            'institution' => $request->institution,
            'deg_type' => $request->degree_type,
            'deg_name' => $request->degree_name,
            'startdate' => $request->edu_start,
            'enddate' => $request->edu_end,
            'association' => $request->association,
            'speciality' => $request->speciality,
            'score' => $request->score,
        );

        
       $finl_mer=array_merge($eduArray, $education);
        $final_dat=json_encode($finl_mer, true);
       
        DB::table('profiles')
        ->where('user_id', Auth::user()->id)
        ->update(['user_education' => $final_dat]);
    }

    return redirect()->route('teacher.UserEducation')
      ->with('success','Education/Certification Saved.');
      
    }
    

    public function TutorTeachingDetails (Request $request)
    {
       
      return view('teacher.userTeachingDetails');
      
    }

    public function AddTutorTeachingDetails(Request $request)
    {
        
            $teaching_details[] = array(
                'i_charge' => $request->i_charge,
                'min_fee' => $request->minimum_fee,
                'max_fee' => $request->maximum_fee,
                'fee_details' => $request->fee_details,
                'tot_exp' => $request->tot_exp,
                'online_exp' => $request->online_exp,
                'travel' => $request->travel,
                'travel_kms' => $request->travel_kms,
                'avail_online_teach' => $request->available_online_teach,
                'digital_pen' => $request->digital_pen,
                'help_homework_assig' => $request->help_homework_assig,
                'currently_emp' => $request->currently_emp,
                'oppor_interest' => $request->oppor_interest,
            );

            $education=json_encode($teaching_details, true);

            DB::table('profiles')
            ->where('user_id', Auth::user()->id)
            ->update(['teaching_details' => $education]);
       

    return redirect()->route('teacher.TutorProfileDescription')
      ->with('success','Teaching Details Saved.');
    }

    public function TeachingExperience (Request $request)
    {
       
      return view('teacher.userExperience');
      
    }

    public function AddUserTeachningExperience(Request $request)
    {
        
        $existing_edu = Profiles::where('user_id', Auth::user()->id)->firstOrFail();
        $eduArray = json_decode($existing_edu->professional_exp, true);
       
        if($eduArray==null){

            $education[] = array(
                'organisation' => $request->organisation,
                'designation' => $request->designation,
                'e_startdate' => $request->e_startdate,
                'e_enddate' => $request->e_enddate,
                'association' => $request->association,
                'job_description' => $request->job_description,
            );

            $education=json_encode($education, true);

            DB::table('profiles')
            ->where('user_id', Auth::user()->id)
            ->update(['professional_exp' => $education]);
        }
        else{
        $education[] = array(
            'organisation' => $request->organisation,
            'designation' => $request->designation,
            'e_startdate' => $request->e_startdate,
            'e_enddate' => $request->e_enddate,
            'association' => $request->association,
            'job_description' => $request->job_description,
        );
        
       $finl_mer=array_merge($eduArray, $education);
        $final_dat=json_encode($finl_mer, true);
       
        DB::table('profiles')
        ->where('user_id', Auth::user()->id)
        ->update(['professional_exp' => $final_dat]);
    }

    return redirect()->route('teacher.TeachingExperience')
      ->with('success','Experience Added.');
    }
    

    public function TutorProfileDescription (Request $request)
    {
       
      return view('teacher.teacher_profile_description');
      
    }

    public function AddTutorProfileDescription (Request $request)
    {
      
            $profile_des[] = array(
                'profile_des' => $request->profile_description,
                'one_acc' => $request->one_acc,
            );
            $profile_res=json_encode($profile_des, true);
            DB::table('profiles')
            ->where('user_id', Auth::user()->id)
            ->update(['profile_description' => $profile_res]);

    return redirect()->route('dashboard')
      ->with('success','Your profile is Complete.');
      
    }
    
    public function UpdatetutorSubject (Request $request)
    {
        $existing_edu = Profiles::where('user_id', Auth::user()->id)->firstOrFail();
        $eduArray = json_decode($existing_edu->subject_tech, true);
         $ind_sub_details = $eduArray[$request->id];
        // dd($ind_sub_details);
        $eduArray[$request->id]['subject'] = $request->update_subject_tech;
        $eduArray[$request->id]['from_level'] = $request->update_from_level;
        $eduArray[$request->id]['to_level'] = $request->update_to_level;

        $product_name = json_encode($eduArray);
       
        DB::table('profiles')
        ->where('user_id', Auth::user()->id)
        ->update(['subject_tech' => $product_name]);
   
        
        return redirect()->route('teacher.TutorsSubject')
        ->with('success','Subject Updated.');
    }

    public function UpdateEducation (Request $request)
    {
       
        $existing_edu = Profiles::where('user_id', Auth::user()->id)->firstOrFail();
        $eduArray = json_decode($existing_edu->user_education, true);
         $ind_sub_details = $eduArray[$request->id];
        // dd($ind_sub_details);
        $eduArray[$request->id]['institution'] = $request->institution;
        $eduArray[$request->id]['deg_type'] = $request->degree_type;
        $eduArray[$request->id]['deg_name'] = $request->degree_name;
        $eduArray[$request->id]['startdate'] = $request->up_start_date;
        $eduArray[$request->id]['enddate'] = $request->up_edu_start;
        $eduArray[$request->id]['association'] = $request->association;
        $eduArray[$request->id]['speciality'] = $request->speciality;
        $eduArray[$request->id]['score'] = $request->score;

        $product_name = json_encode($eduArray);
       
        DB::table('profiles')
        ->where('user_id', Auth::user()->id)
        ->update(['user_education' => $product_name]);
   
        
        return redirect()->route('teacher.UserEducation')
        ->with('success','Education Detail/Certification Updated.');
    }

    public function DeleteTeachingExpDetails (Request $request)
    {
        
         $existing_edu = Profiles::where('user_id', Auth::user()->id)->firstOrFail();
         $eduArray = json_decode($existing_edu->professional_exp, true);

         unset($eduArray[$request->id]);
         $rearrang = array_values($eduArray);
         $final_var=json_encode($rearrang, true);
         
         DB::table('profiles')
            ->where('user_id', Auth::user()->id)
            ->update(['professional_exp' => $final_var]);

        return redirect()->route('teacher.TeachingExperience')
        ->with('success','Teaching/Professional Experience Deleted.');

    }

    public function UpdateTeachingDetails (Request $request)
    {
       
        $existing_edu = Profiles::where('user_id', Auth::user()->id)->firstOrFail();
        $eduArray = json_decode($existing_edu->professional_exp, true);
         $ind_sub_details = $eduArray[$request->id];
     
        $eduArray[$request->id]['organisation'] = $request->up_organisation;
        $eduArray[$request->id]['designation'] = $request->up_designation;
        $eduArray[$request->id]['e_startdate'] = $request->up_e_startdate;
        $eduArray[$request->id]['e_enddate'] = $request->up_e_enddate;
        $eduArray[$request->id]['association'] = $request->up_association;
        $eduArray[$request->id]['job_description'] = $request->upd_job_description;
        
        $exp_update_data = json_encode($eduArray);
       
        DB::table('profiles')
        ->where('user_id', Auth::user()->id)
        ->update(['professional_exp' => $exp_update_data]);
        
        return redirect()->route('teacher.TeachingExperience')
        ->with('success','Teaching or Professional Experience Updated.');
    }

    public function DeletetutorSubject (Request $request)
    {
         $existing_edu = Profiles::where('user_id', Auth::user()->id)->firstOrFail();
         $eduArray = json_decode($existing_edu->subject_tech, true);
        // $ind_sub_details = $eduArray[$request->id];

         unset($eduArray[$request->id]);
         $rearrang = array_values($eduArray);
         $final_var=json_encode($rearrang, true);
         
         DB::table('profiles')
            ->where('user_id', Auth::user()->id)
            ->update(['subject_tech' => $final_var]);

        return redirect()->route('teacher.TutorsSubject')
        ->with('success','Subject Deleted.');

    }
    public function DeleteUserEducation (Request $request)
    {
       
         $existing_edu = Profiles::where('user_id', Auth::user()->id)->firstOrFail();
         $eduArray = json_decode($existing_edu->user_education, true);

         unset($eduArray[$request->id]);
         $rearrang = array_values($eduArray);
         $final_var=json_encode($rearrang, true);
         
         DB::table('profiles')
            ->where('user_id', Auth::user()->id)
            ->update(['user_education' => $final_var]);

        return redirect()->route('teacher.UserEducation')
        ->with('success','Education Detail/Certification Deleted.');

    }



    
}
