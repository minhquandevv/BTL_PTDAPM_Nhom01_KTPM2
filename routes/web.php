<?php

use Illuminate\Support\Facades\Route;

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
//    return view('welcome');
//});


Route::resource('rooms', \App\Http\Controllers\RoomController::class);
Route::resource('accounts', \App\Http\Controllers\AccountsController::class);
Route::resource('evaluates', \App\Http\Controllers\EvaluateController::class);
Route::resource('booking', \App\Http\Controllers\BookingController::class);
Route::resource('employees', \App\Http\Controllers\EmployeeController::class);




