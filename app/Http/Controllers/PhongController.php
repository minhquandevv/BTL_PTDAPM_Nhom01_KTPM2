<?php

namespace App\Http\Controllers;

use App\Models\Phong;
use Illuminate\Http\Request;

class PhongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->search)
        {
            $searchQuery = $request->search;

        $phongs = Phong::where('TenPhong', 'like', "%{$searchQuery}%")
            ->orWhere('GioiThieuPhong', 'like', "%{$searchQuery}%")
            ->orWhere('TinhTrang', 'like', "%{$searchQuery}%")
            ->paginate(15);
        }
        else
        {
            $phongs = Phong::paginate(15);
        }

        return view('phong.index', compact('phongs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('phong.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'TenPhong' => 'required|string|max:255',
            'GioiThieuPhong' => 'required|string',
            'DonGia' => 'required|numeric',
            'TinhTrang' => 'required|string|max:50',
        ], [
            'TenPhong.required' => 'Vui lòng nhập tên phòng.',
            'TenPhong.string' => 'Tên phòng phải là chuỗi.',
            'TenPhong.max' => 'Tên phòng không được vượt quá 255 ký tự.',

            'GioiThieuPhong.required' => 'Vui lòng nhập mô tả phòng.',
            'GioiThieuPhong.string' => 'Mô tả phòng phải là chuỗi.',

            'DonGia.required' => 'Vui lòng nhập đơn giá.',
            'DonGia.numeric' => 'Đơn giá phải là số.',

            'TinhTrang.required' => 'Vui lòng nhập tình trạng phòng.',
            'TinhTrang.string' => 'Tình trạng phòng phải là chuỗi.',
            'TinhTrang.max' => 'Tình trạng phòng không được vượt quá 50 ký tự.',
        ]);


        $phong = Phong::create([
            'TenPhong' => $validatedData['TenPhong'],
            'GioiThieuPhong' => $validatedData['GioiThieuPhong'],
            'DonGia' => $validatedData['DonGia'],
            'TinhTrang' => $validatedData['TinhTrang'],
        ]);
        return view('phong.show', compact('phong'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Phong $phong)
    {
        return view('phong.show', compact('phong'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Phong $phong)
    {
        return view('phong.edit', compact('phong'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Phong $phong)
    {
        $validatedData = $request->validate([
            'TenPhong' => 'required|string|max:255',
            'GioiThieuPhong' => 'required|string',
            'DonGia' => 'required|numeric',
            'TinhTrang' => 'required|string|max:50',
        ], [
            'TenPhong.required' => 'Vui lòng nhập tên phòng.',
            'TenPhong.string' => 'Tên phòng phải là chuỗi.',
            'TenPhong.max' => 'Tên phòng không được vượt quá 255 ký tự.',

            'GioiThieuPhong.required' => 'Vui lòng nhập mô tả phòng.',
            'GioiThieuPhong.string' => 'Mô tả phòng phải là chuỗi.',

            'DonGia.required' => 'Vui lòng nhập đơn giá.',
            'DonGia.numeric' => 'Đơn giá phải là số.',

            'TinhTrang.required' => 'Vui lòng nhập tình trạng phòng.',
            'TinhTrang.string' => 'Tình trạng phòng phải là chuỗi.',
            'TinhTrang.max' => 'Tình trạng phòng không được vượt quá 50 ký tự.',
        ]);

        $phong->update($validatedData);

        return redirect()->route('phong.show', $phong);
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Phong $phong)
    {
        $phong->delete(); // Delete the record
        return redirect()->route('phong.index')->with('success', 'Phong deleted successfully.');
    }
}
