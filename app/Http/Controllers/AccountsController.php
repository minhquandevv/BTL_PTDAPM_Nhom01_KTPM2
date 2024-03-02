<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use function Symfony\Component\Translation\t;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $accounts = $this->searchAccounts($request->search);
        $accounts->appends(['search' => $request->search]);
        return view('backend.accounts.index', compact('accounts'));
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


    /**
     * Display the specified resource.
     */
    public function show(Account $account)
    {
        return view('backend.accounts.show', compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Account $account)
    {
        return view('backend.accounts.edit', compact('account'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Account $account)
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
            return view('backend.accounts.show', compact('account'))->with('success', 'Mật khẩu đã được cập nhật thành công');
        }
    }

    public function destroy(Account $account)
    {
        $account->delete(); // Delete the record
        return redirect()->route('accounts.index')->with('success', 'Phong deleted successfully.');
    }

}
