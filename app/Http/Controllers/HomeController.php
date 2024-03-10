<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view('frontend.home.index');
    }


    public function bookinghistory()
    {
        return view('frontend.component.customer.bookingHistory');
    }

    public function bookinghome()
    {
        return view('frontend.component.customer.bookingHistory');
    }


    public function employeehome()
    {
        $userData = session('userData');
        if (!empty($userData) && $userData['ChucVu'] == "NhanVien") {
            return view('frontend.staff.homeIndex');
        }
        return redirect()->route('bookinghome');
//
    }

    public
    function homeManager()
    {
        $userData = session('userData');
        if (!empty($userData) && $userData['ChucVu'] == "QuanLy") {
            return view('frontend.manager.homeManager');
        }
        return redirect()->route('bookinghome');

    }

}
