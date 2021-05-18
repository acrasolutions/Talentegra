<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\EmailChangeController;
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
});


//livewire for users and phone
Route::view('users','livewire.home');
Route::view('phone','livewire.phone_home');

//Student Settings Routes:
Route::get('/StudentDashboard', function () {
    return view('student.student_dashboard');
})->middleware(['auth', 'verified'])->name('student_dashboard');

Route::any('/UpdateProfileImage', [StudentController::class, 'UpdateProfileImage'])->name('student.UpdateProfileImage');
Route::any('/DeleteProfileImage', [StudentController::class, 'DeleteProfileImage'])->name('student.DeleteProfileImage');
Route::any('/ProfileSettings', [StudentController::class, 'ProfileSettings'])->middleware(['auth', 'verified'])->name('student.ProfileSettings');
Route::any('/UpdateName', [StudentController::class, 'UpdateName'])->name('student.UpdateName');
Route::any('/UpdateEmail', [EmailChangeController::class, 'change'])->name('email.change');
Route::any('/verifyUpdatedEmail', [EmailChangeController::class, 'verify'])->name('email.verify.update');

//Teacher Routes view
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


// Route::view('/teacher_basic_details', 'teacher.teacher_basic_details');

// Route::view('/teacher_address', 'teacher.teacher_address');

Route::view('/IamTeacher', 'teacher.teacher_iam')->name('teacher_iam');

Auth::routes(['verify' => true]);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__.'/auth.php';
