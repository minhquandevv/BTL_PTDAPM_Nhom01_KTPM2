<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BookingController;
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


//Route::get('/', function () {
//    return view('/frontend/auth/login/index');
//});
//Route Home
Route::get('/home', [HomeController::class, 'index'])->name('home');
//Route Auth
Route::get('/login', [AuthController::class, 'index'])->name('login');
=======
Route::get('/', function () {
    return view('frontend.home.index');
});
//Route Home (Customer)
Route::get('/home', [CustomerController::class, 'index'])->name('home');

Route::get('/datPhong', [BookingController::class, 'index'])->name('datPhong');


//new
Route::get('register1', function () {
    return view('frontend.auth.register.customers.RegisterFirst');
});

//new
Route::get('register2', function () {
    return view('frontend.auth.register.customers.Register2');
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
Route::get('completeprofile', function () {
    return view('frontend/manage_profile/customers/last');
});

