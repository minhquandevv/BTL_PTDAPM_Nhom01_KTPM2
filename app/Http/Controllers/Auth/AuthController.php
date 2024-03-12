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

    public function  login()
    {
        return view('frontend/auth/login/login2');
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
                $name = $employee ? $employee->TenQL : $customer->TenKH;
                $userData = [
                    'Email' => $request->input('Email'),
                    'Ma' => $ma,
                    'ChucVu' => $chucVu,
                    'Name' => $name
                ];
                session(['userData' => $userData]);
                if ($userData['ChucVu'] == 'QuanLy') {
                    return redirect()->route("homemanager");
                } elseif ($userData['ChucVu'] == 'NhanVien') {
                    return redirect()->route("employeehome");
                } else {
                        return redirect()->route("bookinghome");
                }
            } else {
                return redirect()->back()->with('errorPass', 'Mật khẩu sai');
            }
        } else {
            return redirect()->back()->with('errorEmail', 'Tên đăng nhập không tồn tại');
        }
    }


    public function logout()
    {
        Session::flush();
        return redirect()->route("bookinghome");
    }
}
