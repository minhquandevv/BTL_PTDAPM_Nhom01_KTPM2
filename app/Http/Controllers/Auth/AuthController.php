<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function __construct()
    {

    }

    public function login()
    {
        return view('frontend/auth/login/index');
    }

    public function loginhandle(Request $request)
    {
        $validatedData = $request->validate([
            'Email' => 'required|email',
            'Password' => 'required|min:8',
        ], [
            'Email.email' => 'Phải là một email',
            'Email.required' => 'Không được trống',
            'Password.required' => 'Không được trống',
            'Password.min' => 'Phải có ít nhất 8 ký tự',
        ]);
        $employee = Employee::where('Email', $request->input('Email'))->first();
        $customer = Customer::where('Email', $request->input('Email'))->first();
        $userEmail = $employee ? $employee : $customer;
        if ($userEmail) {
            if (password_verify($request->input('Password'), $userEmail->Password)) {
                $ma = $employee ? $employee->MaNV : $customer->MaKH;
                $chucVu = $employee ? $employee->Chucvu : "";
                $userData = [
                    'Email' => $request->input('Email'),
                    'Ma' => $ma,
                    'ChucVu' => $chucVu
                ];
                session(['userData' => $userData]);
                if ($userData['ChucVu'] == 'QuanLy') {
                    echo "Quan Ly";
                } elseif ($userData['ChucVu'] == 'NhanVien') {
                    return view('frontend\component\staff\homeIndex');
                } else {
                    return redirect('frontend/component/customer/post');
                }
            } else {
                return redirect()->back()->with('errorPass', 'Mật khẩu sai');
            }
        } else {
            return redirect()->back()->with('errorEmail', 'Tên đăng nhập không tồn tại');
        }
    }
    public function getSessionData()
    {
        $userData = Session::get('userData');

        if ($userData) {
            // User data exists in the session
            return $userData;
        } else {
            // User data not found in the session
            return response()->json(['error' => 'User data not available in session'], 404);
        }
    }


    public function logout()
    {
        Session::flush();

        return view('frontend/auth/login/index');
    }
}
