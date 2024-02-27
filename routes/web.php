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


Route::resource('phong', \App\Http\Controllers\PhongController::class);
Route::get('taikhoan', [\App\Http\Controllers\PhongController::class, 'index'])->name('frontend.phong.index');
Route::resource('taikhoan', \App\Http\Controllers\TaiKhoanController::class);
Route::get('taikhoan', [\App\Http\Controllers\TaiKhoanController::class, 'index'])->name('frontend.taikhoan.index');
Route::resource('danhgia', \App\Http\Controllers\DanhGiaController::class);
Route::resource('hoadon', \App\Http\Controllers\HoaDonController::class);
Route::resource('khachhang', \App\Http\Controllers\KhachHangController::class);




