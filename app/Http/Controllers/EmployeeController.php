<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthController;
use App\Models\Contact;
use App\Models\Employee;
use Illuminate\Console\View\Components\Mutators\EnsureDynamicContentIsHighlighted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->page <= 1 ? 8 : $request->page * 8;
        $employees = $this->searchPhongs($request->search, $perPage);
        return view('frontend.staff.customerServiceManagement', compact('employees'));
    }

    public function addemployee()
    {
        return view('frontend/manager/add');
    }

    public function manageemployeeaccounts(Request $request)
    {
        $perPage = $request->page <= 1 ? 8 : $request->page * 8;
        $employees = $this->searchmanageemployeeaccounts($request->search, $perPage);
        return view('frontend.manager.manageEmployeeAccounts', compact('employees'));
    }

    private
    function searchmanageemployeeaccounts($searchQuery, $perPage)
    {

        if ($searchQuery) {
            return Employee::where('TenQL', 'like', "%{$searchQuery}%")
                ->where('Chucvu', 'like', "NhanVien")
                ->take($perPage)
                ->get();

        } else {
            return Employee::where('Chucvu', 'like', "NhanVien")->take($perPage)->get();
        }
    }

    private
    function searchPhongs($searchQuery, $perPage)
    {
        if ($searchQuery) {
            return Employee::where('TenQL', 'like', "%{$searchQuery}%")->take($perPage)->get();
        } else {
            return Employee::take($perPage)->get();
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.manager.add');
    }

    public function store(Request $request)
    {
        $processedData = $this->processDataBeforeValidation($request->all());
//        echo json_encode($request->all());
        $request->validate([
            'image' => '',//
            'TenQL' => 'required | string | max:50',//
            'CCCD' => 'required | string | max:20',//
            'NgaySinh' => 'required | date',//
            'GioiTinh' => 'required | string | max:10',//
            'DiaChi' => 'required | string | max:255',//
            'Email' => 'required | string | email | max:50',//
            'Password' => 'required | string | max:255',//
            'Chucvu' => '',//
            'SoDienThoai' => 'required | string | max:20',//
        ]);
        // Upload image and get the relative path
        if (!isset($data['image']) || $data['image'] == "") {
            $data['image'] = "image";
        } else {
            $relativeImagePath = $this->uploadImage($request);
            $processedData['DuongDanAnh'] = $relativeImagePath;
        }

        // Add image path to the processed data


        // Create a new NhanVien instance
        Employee::create($processedData);

        // Output processed data as JSON (for testing)
        echo json_encode($processedData);
    }

    private function uploadImage(Request $request)
    {
        // Validate image
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Move the image to the public/images/employees directory
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/employees'), $imageName);

        // Generate the relative image path
        $imagePath = asset("images/employees/$imageName");
        $relativeImagePath = str_replace(asset(''), '', $imagePath);

        return $relativeImagePath;
    }

    private function processDataBeforeValidation(array $data)
    {
        // Add Chucvu and hashed Password to the data array
        $data['Chucvu'] = "NhanVien";
        if (!isset($data['image']) || $data['image'] == "") {
            $data['image'] = "image";
        }
        $data['Password'] = password_hash($data['Password'], PASSWORD_BCRYPT);

        return $data;
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
            return view("frontend.staff.manageCustomerAccounts", compact('employee'));
        } else {
            // Handle the case where the employee with the given ID is not found
            echo json_encode(['error' => 'Employee not found']);
        }
    }

    public function manage_profile()
    {
        // Check if the 'userData' session key exists and has 'Ma' field
        if (Session::has('userData') && array_key_exists('Ma', Session::get('userData'))) {
            $employee = Employee::find(Session::get('userData')['Ma']);
            if ($employee) {
                return view('frontend.manage_profile.customers.profile1', compact('employee'));
            } else {
                // Handle the case where the employee with the given ID is not found
                echo json_encode(['error' => 'Employee not found']);
            }
        } else {
            // Handle the case where the 'userData' session key is not set or does not have 'Ma' field
            echo json_encode(['error' => 'Invalid session data']);
        }
    }

    public function editinfor()
    {
        // Check if the 'userData' session key exists and has 'Ma' field
        if (Session::has('userData') && array_key_exists('Ma', Session::get('userData'))) {
            $employee = Employee::find(Session::get('userData')['Ma']);
            if ($employee) {
                return view('frontend/manage_profile/customers/c_profile', compact('employee'));
            } else {
                // Handle the case where the employee with the given ID is not found
                echo json_encode(['error' => 'Employee not found']);
            }
        } else {
            // Handle the case where the 'userData' session key is not set or does not have 'Ma' field
            echo json_encode(['error' => 'Invalid session data']);
        }
    }


    public function manageeminforployeeaccounts(string $id)
    {

        // Find the employee by MaNV (assuming MaNV is the primary key)
        $employee = Employee::find($id);
        // Check if the employee exists
        if ($employee) {
            return view("frontend.staff.testk", compact('employee'));
        } else {
            // Handle the case where the employee with the given ID is not found
            echo json_encode(['error' => 'Employee not found']);
        }
    }

    public function manageemdeleteeformployeeaccounts(string $id)
    {

        // Find the employee by MaNV (assuming MaNV is the primary key)
        $employee = Employee::find($id);

        // Check if the employee exists
        if ($employee) {
            return view('frontend.manager.delete', compact('employee'));
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
        return view('backend . employees . edit', compact('employee'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $validatedData = $request->validate([
            'Password' => 'required',
            'MatKhauNew' => 'required | min:8',
            'MatKhauNewConf' => 'required | min:8',
        ], [
            'Password . required' => 'Không được trống',
            'MatKhauNew . required' => 'Không được trống',
            'MatKhauNewConf . required' => 'Không được trống',
            'MatKhauNew . min' => 'Phải có ít nhất 8 ký tự',
            'MatKhauNewConf . min' => 'Phải có ít nhất 8 ký tự',
        ]);

        if (!password_verify($validatedData['Password'], $employee->Password)) {
            return redirect()->back()->with('error', 'Mật khẩu hiện tại không đúng');
        } elseif ($request->MatKhauNew != $request->MatKhauNewConf) {
            return redirect()->back()->with('error', 'Mật khẩu mới và xác nhận không khớp');
        } else {
            $hashedPasswordNew = password_hash($validatedData['MatKhauNew'], PASSWORD_BCRYPT);
            $employee->update(['Password' => $hashedPasswordNew]);
            return redirect()->route('employees . show', $employee->MaNV);
        }
    }

    public function updateEmployee(Request $request)
    {
        $employee = Employee::find($request->MaNV);

        $rules = [
            'TenQL' => 'required|string',
            'GioiTinh' => 'required|in:Nam,Nu',
            'DiaChi' => 'required|string',
            'Email' => 'required|email',
            'SoDienThoai' => 'required|string|min:8|max:20',
            'Luong' => 'required|numeric',
            'Password' => 'nullable|min:8', // Password is now optional
            'NgaySinh' => 'required', // Password is now optional
        ];

        $messages = [
            'required' => 'Không được trống',
            'GioiTinh.in' => 'Chọn Nam hoặc Nư',
            'Email.email' => 'Phải là email',
            'SoDienThoai.string' => 'Phải là chuỗi ký tự',
            'Luong.numeric' => 'Phải là số',
            'SoDienThoai.min' => 'Phải có ít nhất 8 ký tự',
            'SoDienThoai.max' => 'Phải ít hơn 20 ký tự',
            'Password.min' => 'Phải có ít nhất 8 ký tự',
        ];

        $validatedData = $request->validate($rules, $messages);

        $dataToUpdate = [
            'TenQL' => $validatedData['TenQL'],
            'GioiTinh' => $validatedData['GioiTinh'],
            'DiaChi' => $validatedData['DiaChi'],
            'Email' => $validatedData['Email'],
            'SoDienThoai' => $validatedData['SoDienThoai'],
            'NgaySinh' => $validatedData['NgaySinh'],
        ];

        if ($request->filled('Password')) {
            // If 'Password' is present in $validatedData
            $dataToUpdate['Password'] = password_hash($validatedData['Password'], PASSWORD_BCRYPT);
        }

        $employee->update($dataToUpdate);

        return redirect()->route('manageemployeeaccounts');

        //check email uniqui
    }

    public function updatePersonalAccount(Request $request)
    {
        // Check if the 'userData' session key exists and has 'Ma' field
        if (Session::has('userData') && array_key_exists('Ma', Session::get('userData'))) {
            $employee = Employee::find(Session::get('userData')['Ma']);
            if ($employee) {
                $rules = [
                    'fistName' => 'required|string',
                    'lastName' => 'required|string',
                    'GioiTinh' => 'required|in:Nam,Nu',
                    'DiaChi' => 'required|string',
                    'Email' => 'required|email',
                    'SoDienThoai' => 'required|string|min:8|max:20',
                    'NgaySinh' => 'required',
                ];
                $messages = [
                    'fistName.required' => 'Không được trống',
                    'lastName.required' => 'Không được trống',
                    'required' => 'Không được trống',
                    'GioiTinh.in' => 'Chọn Nam hoặc Nữ',
                    'Email.email' => 'Phải là email',
                    'SoDienThoai.string' => 'Phải là chuỗi ký tự',
                    'SoDienThoai.min' => 'Phải có ít nhất 8 ký tự',
                    'SoDienThoai.max' => 'Phải ít hơn 20 ký tự',
                ];
                $validatedData = $request->validate($rules, $messages);

                $dataToUpdate = [
                    'TenQL' => $validatedData['fistName'] . ' ' . $validatedData['lastName'],
                    'GioiTinh' => $validatedData['GioiTinh'],
                    'DiaChi' => $validatedData['DiaChi'],
                    'Email' => $validatedData['Email'],
                    'SoDienThoai' => $validatedData['SoDienThoai'],
                    'NgaySinh' => $validatedData['NgaySinh'],
                ];


//                if (!password_verify($request->Password, $employee->Password)) {
//                    return redirect()->back()->with('error', 'Mật khẩu hiện tại không đúng');
//                } elseif ($request->MatKhauNew != $request->MatKhauNewConf) {
//                    return redirect()->back()->with('passwordIncorrect', 'Mật khẩu mới và xác nhận không khớp');
//                } else {
//                    $dataToUpdate['Password'] = password_hash($validatedData['Password'], PASSWORD_BCRYPT);
                $employee->update($dataToUpdate);
                return view('frontend.manage_profile.customers.last');
//                }

            } else {
                // Handle the case where the employee with the given ID is not found
                echo json_encode(['error' => 'Employee not found']);
            }
        } else {
            // Handle the case where the 'userData' session key is not set or does not have 'Ma' field
            echo json_encode(['error' => 'Invalid session data']);
        }


    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::find($id);
        Contact::where('MaNV', $id)->delete();
        $employee->delete();

        return view('frontend.manager.deletesuccess');
    }
}
