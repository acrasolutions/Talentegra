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

class JobsController extends Controller
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

    public function Filter_Job_d(Request $request)
    {
       if($request->req_search == 'all'){
        $obs_cat= DB::table('student_posts')->where('status', 1)->orderBy('id','desc')->paginate(10);
    }
    elseif($request->req_search == 'Online'){
        $obs_cat= DB::table('student_posts')->whereJsonContains('meeting_options', 'Online')->where('status', 1)->orderBy('id','desc')->paginate(10);
    }
    elseif($request->req_search == 'Home'){
        $obs_cat= DB::table('student_posts')->whereJsonContains('meeting_options', 'Home')->where('status', 1)->orderBy('id','desc')->paginate(10);
    }
    elseif($request->req_search == 'Assignment'){
        $obs_cat= DB::table('student_posts')->where('st_i_want', 'Assignment')->where('status', 1)->orderBy('id','desc')->paginate(10);
    }


    else{
        $obs_cat= DB::table('student_posts')->where('status', 1)->orderBy('id','desc')->paginate(10);
    }

        return view('teacher.t_search_jobs', compact('obs_cat'));
    }

    public function SearchJobs()
    {

    $obs_cat= DB::table('student_posts')->where('status', 1)->orderBy('id','desc')->paginate(10);

     return view('teacher.t_search_jobs', compact('obs_cat'));
    }

   

  
   


    
}
