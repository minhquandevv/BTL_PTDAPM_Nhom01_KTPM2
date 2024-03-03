<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;
// use App\Http\Controllers\CustomerController;
// use App\Http\Controllers\BookingController;
// use App\Http\Controllers\CustomerController;
// use App\Http\Controllers\BookingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.home.index');
});
//Route Home
Route::get('/home', [HomeController::class, 'index'])->name('home');
//Route Auth
Route::get('/login', [AuthController::class, 'index'])->name('login');

//new
Route::get('register1', function () {
    return view('frontend.auth.register.customers.RegisterFirst');
});

//new
Route::get('register2', function () {
    return view('frontend.auth.register.customers.Register2');
    return view('frontend.home.index');
});

//new

Route::get('completeregister', function () {
    return view('frontend.auth.register.customers.CompleteRegistration');
});

//new
//new
Route::get('commit', function () {
    return view('frontend.auth.register.customers.CommitRegister');
});
//new
Route::get('createprofile', function () {
    return view('frontend.auth.register.customers.CreateProfile');
});
//new
Route::get('createprofile2', function () {
    return view('frontend.auth.register.customers.CreateProfile2');
});

//new
Route::get('createprofile3', function () {
    return view('frontend.auth.register.customers.CreateProfile3');
});

//new
Route::get('createprofile4', function () {
    return view('frontend.auth.register.customers.CreateProfile4');
});
//new
Route::get('last', function () {
    return view('frontend.auth.register.customers.LastCreateProfile');
});


//new
Route::get('mp1', function () {
    return view('frontend/manage_profile/customers/c_profile');
});
//new
Route::get('profile1', function () {
    return view('frontend.manage_profile.customers.profile1');
});
//new
Route::get('completeprofile', function () {
    return view('frontend.manage_profile.customers.last');
});

Route::get('createhomestay', function () {
    return view('frontend.employee.CreateHomestay');
});

Route::get('successupload', function () {
    return view('frontend.employee.SuccessUpload');
});

//Edit Homestay
Route::get('edithomestay', function () {
    return view('frontend.employee.EditHomestay');
});

Route::get('successedithomestay', function () {
    return view('frontend.employee.SuccessEdit');
});

Route::get('editedhomestay', function () {
    return view('frontend.employee.HomestayEdited');
});

Route::get('deletehomestay', function () {
    return view('frontend.employee.DeleteForm');
});

Route::get('deletehomestay1', function () {
    return view('frontend.employee.SuccessDeleteHomestay');
});


//Staff

Route::get('successadd', function () {
    return view('frontend.staff.AddAccountSuccess');
});

//Staff

Route::get('successeditaccount', function () {
    return view('frontend.staff.EditAccountSuccess');
});

//Staff

Route::get('successdeleteaccount', function () {
    return view('frontend.staff.DeleteAccountSuccess');
});

//Staff

Route::get('comfirmdeleteaccout', function () {
    return view('frontend.staff.DeleteAccountForm');
});

//Customer

Route::get('pay', function () {
    return view('frontend.manage_profile.customers.Pay');
});

Route::get('feedback', function () {
    return view('frontend.manage_profile.customers.Feedback');
});
Route::get('feedbacksuccess', function () {
    return view('frontend.manage_profile.customers.FeedbackSuccess');
});

Route::get('bookingsuccess', function () {
    return view('frontend.manage_profile.customers.BookingSuccess');
});

Route::get('employeeprofile', function () {
    return view('frontend.manage_profile.employees.EmployeeProfile');
});