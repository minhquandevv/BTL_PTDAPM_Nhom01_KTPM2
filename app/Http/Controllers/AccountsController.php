<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\RoomType;
use Illuminate\Http\Request;
use function Symfony\Component\Translation\t;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($request)
    {
//        $roomType = RoomType::all();
//        echo json_encode($roomType);
//        $employees = $this->searchAccounts($request->search);
//        $employees->appends(['search' => $request->search]);
//        return view('backend.employees.index', compact('employees'));
    }

    private function searchAccounts($searchQuery)
    {
        if ($searchQuery) {
            return Account::where('TenDangNhap', 'like', "%{$searchQuery}%")
                ->paginate(15);
        } else {
            return Account::paginate(15);
        }
    }

    public function create()
    {
        return view('backend.employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $TenDangNhap = $request->TenDangNhap;
        $account = Account::where('TenDangNhap', $TenDangNhap)->first();

        if ($account && $TenDangNhap == $account->TenDangNhap) {
            return redirect()->route('employees.create')->with('error', 'tai khoan da ton tai.');
        } else {
            $validatedData = $request->validate([
                'TenDangNhap' => 'required',
                'MatKhau' => 'required|min:8',
                'MatKhauCof' => 'required|min:8',
            ], [
                'TenDangNhap.required' => 'Không được trống',
                'MatKhau.required' => 'Không được trống',
                'MatKhauCof.required' => 'Không được trống',
                'MatKhau.min' => 'Phải có ít nhất 8 ký tự',
                'MatKhauCof.min' => 'Phải có ít nhất 8 ký tự',
            ]);

            if ($request->MatKhau == $request->MatKhauCof) {
                $hashedPasswordNew = password_hash($validatedData['MatKhau'], PASSWORD_BCRYPT);
                $account = Account::create([
                    'TenDangNhap' => $validatedData['TenDangNhap'],
                    'MatKhau' => $hashedPasswordNew,
                    'MaLoaiTK' => '3'
                ]);
            } else {
                return redirect()->back()->with('errorPass', 'Mật khẩu mới và xác nhận không khớp');
            }

            return redirect()->route('employees.show', $account)->with('success', 'Phong create successfully.');
        }
    }

    /**
     * Display the specified resource.
     */
    public
    function show(Account $account)
    {
        return view('backend.employees.show', compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public
    function edit(Account $account)
    {
        return view('backend.employees.edit', compact('account'));
    }

    /**
     * Update the specified resource in storage.
     */
    public
    function update(Request $request, Account $account)
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

        if (!password_verify($validatedData['MatKhau'], $account->MatKhau)) {
            return redirect()->back()->with('error', 'Mật khẩu hiện tại không đúng');
        } elseif ($request->MatKhauNew != $request->MatKhauNewConf) {
            return redirect()->back()->with('error', 'Mật khẩu mới và xác nhận không khớp');
        } else {
            $hashedPasswordNew = password_hash($validatedData['MatKhauNew'], PASSWORD_BCRYPT);
            $account->update(['MatKhau' => $hashedPasswordNew]);
            return view('backend.employees.show', compact('account'))->with('success', 'Mật khẩu đã được cập nhật thành công');
        }
    }

    public
    function destroy(Account $account)
    {
        $account->delete(); // Delete the record
        return redirect()->route('employees.index')->with('success', 'Phong deleted successfully.');
    }

}
