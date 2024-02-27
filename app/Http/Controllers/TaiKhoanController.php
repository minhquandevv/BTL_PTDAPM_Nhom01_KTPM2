<?php

namespace App\Http\Controllers;

use App\Models\Phong;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;
use function Symfony\Component\Translation\t;

class TaiKhoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $taikhoans = $this->searchPhongs($request->search);
        $taikhoans->appends(['search' => $request->search]);
        return view('frontend.taikhoan.index', compact('taikhoans'));
    }

    private function searchPhongs($searchQuery)
    {
        if ($searchQuery) {
            return TaiKhoan::where('TenDangNhap', 'like', "%{$searchQuery}%")
                ->paginate(15);
        } else {
            return TaiKhoan::paginate(15);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(TaiKhoan $taikhoan)
    {
        return view('frontend.taikhoan.show', compact('taikhoan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TaiKhoan $taikhoan)
    {
        return view('frontend.taiKhoan.edit', compact('taikhoan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TaiKhoan $taikhoan)
    {
        $validatedData = $request->validate([
            'MatKhau' => 'required',
            'MatKhauNew' => 'required|min:8',
            'MatKhauNewConf' => 'required|min:8',
        ], [
            'MatKhau.required' => 'Không được trống',
            'MatKhauNew.required' => 'Không được trống',
            'MatKhauNewConf.required' => 'Không được trống',
            'MatKhauNew.min' => 'Phải có ít nhất 8 ký tự',
            'MatKhauNewConf.min' => 'Phải có ít nhất 8 ký tự',
        ]);

        if (!password_verify($validatedData['MatKhau'], $taikhoan->MatKhau)) {
            return redirect()->back()->with('error', 'Mật khẩu hiện tại không đúng');
        } elseif ($request->MatKhauNew != $request->MatKhauNewConf) {
            return redirect()->back()->with('error', 'Mật khẩu mới và xác nhận không khớp');
        } else {
            $hashedPasswordNew = password_hash($validatedData['MatKhauNew'], PASSWORD_BCRYPT);
            $taikhoan->update(['MatKhau' => $hashedPasswordNew]);
            return view('frontend.taikhoan.show', compact('taikhoan'))->with('success', 'Mật khẩu đã được cập nhật thành công');
        }
    }

    public function destroy(TaiKhoan $taikhoan)
    {
        $taikhoan->delete(); // Delete the record
        return redirect()->route('frontend.taikhoan.index')->with('success', 'Phong deleted successfully.');
    }

}
