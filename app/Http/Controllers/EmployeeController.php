<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        // Find the employee by MaNV (assuming MaNV is the primary key)
        $employee = Employee::find($id);

        // Check if the employee exists
        if ($employee) {
            // Convert the employee to JSON and echo it
            echo json_encode($employee);
        } else {
            // Handle the case where the employee with the given ID is not found
            echo json_encode(['error' => 'Employee not found']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::find($id);
        return view('backend.employees.edit', compact('employee'));

    }

    /**
     * Update the specified resource in storage.
     */
    public
    function update(Request $request, Employee $employee)
    {
        $validatedData = $request->validate([
            'Password' => 'required',
            'MatKhauNew' => 'required|min:8',
            'MatKhauNewConf' => 'required|min:8',
        ], [
            'Password.required' => 'Không được trống',
            'MatKhauNew.required' => 'Không được trống',
            'MatKhauNewConf.required' => 'Không được trống',
            'MatKhauNew.min' => 'Phải có ít nhất 8 ký tự',
            'MatKhauNewConf.min' => 'Phải có ít nhất 8 ký tự',
        ]);

        if (!password_verify($validatedData['Password'], $employee->Password)) {
            return redirect()->back()->with('error', 'Mật khẩu hiện tại không đúng');
        } elseif ($request->MatKhauNew != $request->MatKhauNewConf) {
            return redirect()->back()->with('error', 'Mật khẩu mới và xác nhận không khớp');
        } else {
            $hashedPasswordNew = password_hash($validatedData['MatKhauNew'], PASSWORD_BCRYPT);
            $employee->update(['Password' => $hashedPasswordNew]);
            return redirect()->route('employees.show', $employee->MaNV);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public
    function destroy(string $id)
    {
        //
    }
}
