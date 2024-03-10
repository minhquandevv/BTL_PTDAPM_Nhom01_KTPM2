<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
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


Route::resource('evaluates', \App\Http\Controllers\EvaluateController::class);
Route::resource('customers', \App\Http\Controllers\CustomerController::class);


//Route Home
Route::get('/', [HomeController::class, 'index'])->name('home');
//Route Auth

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginhandle'])->name('login.loginhandle');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


//Khách hàng
// Trang chủ khách hàng đặt phòng
Route::get('/bookinghome', [\App\Http\Controllers\RoomController::class, 'index'])->name('bookinghome');

//Lịch sử đặt phòng
Route::get('/bookinghistory', [HomeController::class, 'bookinghistory'])->name('bookinghistory');

//Đánh giá và phản hồi
Route::get('feedback', function () {
    return view('frontend.component.customer.reviewAndFeedback');
});
//Danh sách yêu thích

Route::get('favouritelist', function () {
    return view('frontend.component.customer.favoriteListHeart');
});

//
//Route::get('bookroomcancel', function () {
//    return view('frontend.component.customer.bookroomcancel');
//});


//resources/views/frontend/component/customer/cancelRoom.blade.php
Route::get('bookroom', function () {
    return view('frontend.component.customer.bookRoom');
});

//Quản lý thông tin đặt phòng
Route::get('cancelroom', function () {
    return view('frontend.component.customer.cancelRoom');
});
//hủy đặt phòng
Route::get('cancelroom2', function () {
    return view('frontend.component.customer.cancelRoom2');
});

Route::get('/showRoom/{id}', [\App\Http\Controllers\RoomController::class, 'showRoom'])->name('showRoom');

//Chọn p hủy
Route::get('comfirmformcancel', function () {
    return view('frontend.component.customer.comfirmFormCancel');
});

//huyer thành công
Route::get('successcancel', function () {
    return view('frontend.component.customer.SuccessCancel');
});
//Form hủy phòng
Route::get('cancelroominfor', function () {
    return view('frontend.component.customer.cancelRoomInfor');
});

//form hủy sau khi hủy thành công
Route::get('cancelroomsuccess', function () {
    return view('frontend.component.customer.cancelRoomSuccess');
});

//
Route::get('favoritelistinfor', function () {
    return view('frontend.component.customer.favoriteListInfor');
});

//
Route::get('managebkinfor', function () {
    return view('frontend.component.customer.managebkInfor');
});


//
Route::get('managebkinfordetail', function () {
    return view('frontend.component.customer.managebkInforDetail');
});


//Nhân viên
// resources\views\frontend\staff\homeIndex.blade.php

Route::get('/employeehome', [HomeController::class, 'employeehome'])->name('employeehome');
Route::resource('employees', \App\Http\Controllers\EmployeeController::class);

// QUản lý phòng nv
Route::get('/roommanagement', [\App\Http\Controllers\RoomController::class, 'roommanagement'])->name('roommanagement');

// Infor sau khi tìm kiếm

Route::get('searchinfor', function () {
    return view('frontend.staff.searchInfor');
});

// Xem LSDP của nv
//
//Route::get('historyandreviews1', function () {
//    return view('frontend.staff.historyAndReviews_1');
//});
Route::resource('invoicemanagement', \App\Http\Controllers\BookingController::class);
Route::get('historyandreviews1', [\App\Http\Controllers\BookingController::class, 'historyandreviews1'])->name('historyandreviews1');
Route::get('historyandreviews2/{id}', [\App\Http\Controllers\BookingController::class, 'historyandreviews2'])->name('historyandreviews2');
Route::get('showAllRoom', [\App\Http\Controllers\BookingController::class, 'showAllRoom'])->name('showAllRoom');

// Tất cả DG và phản hồi


Route::resource('customerservicemanagement', \App\Http\Controllers\CustomerController::class);
Route::get('/comfirmdeleteaccout/{id}', [\App\Http\Controllers\CustomerController::class, 'getcomfirmdeleteaccout'])->name('comfirmdeleteaccout');


Route::get('guestcaremanagement', function () {
    return view('frontend.staff.guestCareManagement');
});

//resources\views\frontend\staff\onlineSupportMesseges.blade.php HỖ trọ trực tuyến
Route::get('onlinesupportmesseges', function () {
    return view('frontend.staff.onlineSupportMesseges');
});

// resources\views\frontend\staff\onlineSupportPhone.blade.php
Route::get('onlinesupportphone', function () {
    return view('frontend.staff.onlineSupportPhone');
});


//resources\views\frontend\manager\homeManager.blade.php
Route::get('/homemanager', [HomeController::class, 'homemanager'])->name('homemanager');


//resources\views\frontend\manager\statistics.blade.php biểu dồ
Route::get('statistics', function () {
    return view('frontend.manager.statistics');
});


//đã sửa
Route::get('editede', function () {
    return view('frontend.manager.edited');
});

//Ds kahchs hàng resources\views\frontend\manager\customerStatistics.blade.php
Route::get('customerstatistics', [\App\Http\Controllers\BookingController::class, 'customerstatistics'])->name('customerstatistics');
//});
//resources\views\frontend\manager\add.blade.php  thêm nhân viên
Route::get('addemployee', [\App\Http\Controllers\EmployeeController::class, 'addemployee'])->name('addemployee');
Route::get('manageemployeeaccounts', [\App\Http\Controllers\EmployeeController::class, 'manageemployeeaccounts'])->name('manageemployeeaccounts');
Route::get('manageeminforployeeaccounts/{id}', [\App\Http\Controllers\EmployeeController::class, 'manageeminforployeeaccounts'])->name('manageeminforployeeaccounts');
Route::get('manageemdeleteeformployeeaccounts/{id}', [\App\Http\Controllers\EmployeeController::class, 'manageemdeleteeformployeeaccounts'])->name('manageemdeleteeformployeeaccounts');

//Route::get('addemployee', function () {
//    return view('frontend.manager.add');
//});

// thêm nhân viên thành công
Route::get('addemployeesuccess', function () {
    return view('frontend.manager.addsuccess');
});
// sửa tt nv
Route::get('editemployee', function () {
    return view('frontend.manager.edit');
});
// sửa nhân viên thành công
Route::get('editsuccess', function () {
    return view('frontend.manager.editsuccess');
});


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


//quan ly tai khoan ca nhan
Route::get('showinforaccount/{id}', [\App\Http\Controllers\EmployeeController::class, 'showinforaccount'])->name('showinforaccount');
Route::post('personalaccountmanagement/{id}', [\App\Http\Controllers\EmployeeController::class, 'personalaccountmanagement'])->name('personalaccountmanagement');


//new
Route::get('mp1', function () {
    return view('frontend/manage_profile/customers/c_profile');
});
//Quản lý thông tin khách hàng
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


Route::get('successedithomestay', function () {
    return view('frontend.employee.SuccessEdit');
});

Route::get('editedhomestay', function () {
    return view('frontend.employee.HomestayEdited');
});

Route::get('deletehomestay1', function () {
    return view('frontend.employee.SuccessDeleteHomestay');
});


Route::get('/deletehomestay/{id}', [\App\Http\Controllers\RoomController::class, 'getdeletehomestay'])->name('deletehomestay');
Route::resource('rooms', \App\Http\Controllers\RoomController::class);

//Staff

Route::get('successadd', function () {
    return view('frontend.staff.AddAccountSuccess');
});

//Staff

Route::get('successeditaccount', function () {
    return view('frontend.staff.EditAccountSuccess');
});

//Staff


//Customer

Route::get('pay', function () {
    return view('frontend.manage_profile.customers.Pay');
});

Route::get('feedbackform', function () {
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

Route::get('test1', function () {
    return view('frontend.manage_profile.customers.test');
});

