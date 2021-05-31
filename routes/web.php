<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\Auth\EmailChangeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Input;
use App\Models\Student_posts;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('wel');

//Jobs Search
Route::any ( '/FilterJobs', function (Request $request) {
    $q = Request::get ( 'q' );
    $location_S = Request::get ( 'location_s' );
//if subject and location is not null ///////////////////////////////////////////////////
if($q != null && $location_S != null){
      
        $ck_data= DB::table('subjects')->select('subject_name','id')->where('subject_name','LIKE','%'.$q."%")->get();
        $tty=[];
        if($ck_data != null){
           foreach($ck_data as $key => $row){
            $tty[]=$row->id;
           }

        $sdfg=[];
        foreach($tty as $cvf){
        $ano_dat=DB::table('student_posts')->whereRaw(
        'JSON_CONTAINS(st_subjects, \'["'.$cvf .'"]\')'
        )->pluck('id')->first();
        $sdfg[]=$ano_dat;
    }
    $obs_cat = Student_posts::whereIn('id',$sdfg)
    ->Where('st_location','LIKE','%'.$location_S."%")->where('status', 1)->paginate(2);
        }
}
//if subject is not null and location is null ///////////////////////////////////////////////////
elseif($q != null && $location_S == null){
    $ck_data= DB::table('subjects')->select('subject_name','id')->where('subject_name','LIKE','%'.$q."%")->get();
    $tty=[];
    if($ck_data != null){
       foreach($ck_data as $key => $row){
        $tty[]=$row->id;
       }

    $sdfg=[];
    foreach($tty as $cvf){
    $ano_dat=DB::table('student_posts')->whereRaw(
    'JSON_CONTAINS(st_subjects, \'["'.$cvf .'"]\')'
    )->pluck('id')->first();
    $sdfg[]=$ano_dat;
}
$obs_cat = Student_posts::whereIn('id',$sdfg)->where('status', 1)->paginate(2);
    }

}
//if subject is null and location is not null///////////////////////////////////////////////////
elseif($q == null && $location_S != null){
   $obs_cat= DB::table('student_posts')->where('st_location','LIKE','%'.$location_S."%")->where('status', 1)->orderBy('id','desc')->paginate(2);
}
//default//////////////////////////////////////////////////////////////////////////////////////////////////////
    else{
        $obs_cat= DB::table('student_posts')->where('status', 1)->orderBy('id','desc')->paginate(2);
    }

    return view('teacher.t_search_jobs', compact('obs_cat'));
})->name('t_jobsearch');

//Jobsearch

Route::any('/Filter_Job', [JobsController::class, 'Filter_Job_d'])->name('Filter_Job');

//livewire for users and phone
Route::view('users','livewire.home');
Route::view('phone','livewire.phone_home');

//Live Status
// Laravel 8.x & up
Route::get('status', [UserController::class, 'status']);
Route::get('live-status/{id}', [UserController::class, 'liveStatus']);

//Student Settings Routes:
Route::get('/StudentDashboard', function () {
    return view('student.student_dashboard');
})->middleware(['auth', 'verified'])->name('student_dashboard');


//Teacher Jobs Routes view
Route::get('/TutorJobs', [JobsController::class, 'Filter_Job_d'])->name('tutor.SearchJobs');

//student post requirement

Route::any('/PostRequirement', [StudentController::class, 'PostRequirement'])->name('student.PostRequirement');
Route::any('/PostRequirementAdd', [StudentController::class, 'PostRequirementAdd'])->name('student.PostRequirementAdd');
 Route::any('/StudentDeletePost', [StudentController::class, 'StudentDeletePost'])->name('student.DeletePost');
 Route::any('/StudentRePost', [StudentController::class, 'StudentRePost'])->name('student.StudentRePost');
 Route::any('/RepostRequirement', [StudentController::class, 'RepostRequirement'])->name('student.RepostRequirement');
 Route::any('/StudentViewPost', [StudentController::class, 'StudentViewPost'])->name('student.StudentViewPost');

 

Route::any('/UpdateProfileImage', [StudentController::class, 'UpdateProfileImage'])->name('student.UpdateProfileImage');
Route::any('/DeleteProfileImage', [StudentController::class, 'DeleteProfileImage'])->name('student.DeleteProfileImage');
Route::any('/ProfileSettings', [StudentController::class, 'ProfileSettings'])->middleware(['auth', 'verified'])->name('student.ProfileSettings');
Route::any('/UpdateName', [StudentController::class, 'UpdateName'])->name('student.UpdateName');
Route::any('/UpdateEmail', [EmailChangeController::class, 'change'])->name('email.change');
Route::any('/verifyUpdatedEmail', [EmailChangeController::class, 'verify'])->name('email.verify.update');


Route::any('/TutorView_sPost', [TeachersController::class, 'TutorView_sPost'])->name('teacher.TutorView_sPost');
Route::any('/TutorViewProfile', [TeachersController::class, 'TutorViewProfile'])->name('teacher.TutorViewProfile');
Route::any('/TeacherDashboard', [TeachersController::class, 'TeacherDashboard'])->middleware(['auth', 'verified'])->name('teacher.TeacherDashboard');
Route::any('/TeacherIamCompany', [TeachersController::class, 'teacherIamCompany'])->name('teacher.teacherIamCompany');
Route::any('/TeacherBasicDetails', [TeachersController::class, 'TeacherBasicDetails'])->name('teacher.TeacherBasicDetails');
Route::any('/UserAddress', [TeachersController::class, 'UserAddress'])->name('teacher.UserAddress');
Route::any('/UserPhone', [TeachersController::class, 'UserPhone'])->name('teacher.UserPhone');
Route::any('/TutorsSubject', [SubjectController::class, 'TutorsSubject'])->name('teacher.TutorsSubject');

Route::any('/UserEducation', [SubjectController::class, 'UserEducation'])->name('teacher.UserEducation');
Route::any('/TeachingExperience', [SubjectController::class, 'TeachingExperience'])->name('teacher.TeachingExperience');
Route::any('/TutorTeachingDetails', [SubjectController::class, 'TutorTeachingDetails'])->name('teacher.TutorTeachingDetails');
Route::any('/TutorProfileDescription', [SubjectController::class, 'TutorProfileDescription'])->name('teacher.TutorProfileDescription');

//Teacher Routes add action
Route::any('/TeacherAddIam', [TeachersController::class, 'TeacherAddIam'])->name('teacher.addIam');
Route::any('/TeacherIamCompanyAdd', [TeachersController::class, 'teacherIamCompany_add'])->name('teacher.teacherIamCompany_add');
Route::any('/TeacherBasicDetailsAdd', [TeachersController::class, 'TeacherBasicDetails_add'])->name('teacher.TeacherBasicDetails_add');
Route::any('/AddUserAddress', [TeachersController::class, 'AddUserAddress'])->name('teacher.AddUserAddress');
Route::any('/AddUserPhone', [TeachersController::class, 'AddUserPhone'])->name('teacher.AddUserPhone');
Route::any('/DeleteUserPhone', [TeachersController::class, 'DeleteUserPhone'])->name('teacher.DeleteUserPhone');

//ajax getahead search for subject
Route::get('autocomplete', [TeachersController::class, 'autocomplete'])->name('autocomplete');



//subject Routes add action
Route::any('/AddtutorSubject', [SubjectController::class, 'AddtutorSubject'])->name('teacher.AddtutorSubject');
Route::any('/AddNewtutorSubject', [SubjectController::class, 'AddNewtutorSubject'])->name('teacher.AddNewtutorSubject');
Route::any('/AddUserEducation', [SubjectController::class, 'AddUserEducation'])->name('teacher.AddUserEducation');
Route::any('/AddUserTeachningExperience', [SubjectController::class, 'AddUserTeachningExperience'])->name('teacher.AddUserTeachningExperience');
Route::any('/AddTutorTeachingDetails', [SubjectController::class, 'AddTutorTeachingDetails'])->name('teacher.AddTutorTeachingDetails');
Route::any('/AddTutorProfileDescription', [SubjectController::class, 'AddTutorProfileDescription'])->name('teacher.AddTutorProfileDescription');

//Individual Update Routes
Route::any('/UpdatetutorSubject', [SubjectController::class, 'UpdatetutorSubject'])->name('teacher.UpdatetutorSubject');
Route::any('/UpdateEducation', [SubjectController::class, 'UpdateEducation'])->name('teacher.UpdateEducation');
Route::any('/UpdateTeachingDetails', [SubjectController::class, 'UpdateTeachingDetails'])->name('teacher.UpdateTeachingDetails');

//Individual Delete Routes
Route::any('/DeletetutorSubject', [SubjectController::class, 'DeletetutorSubject'])->name('teacher.DeletetutorSubject');
Route::any('/DeleteUserEducation', [SubjectController::class, 'DeleteUserEducation'])->name('teacher.DeleteUserEducation');
Route::any('/DeleteTeachingExpDetails', [SubjectController::class, 'DeleteTeachingExpDetails'])->name('teacher.DeleteTeachingExpDetails');



Route::view('/IamTeacher', 'teacher.teacher_iam')->name('teacher_iam');

Auth::routes(['verify' => true]);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__.'/auth.php';
