<?php

namespace App\Http\Controllers;

use App\Models\HoaDon;
use Illuminate\Http\Request;

class HoaDonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all DanhGia records with associated KhachHang and Phong
        $lichsudatphongs = HoaDon::with("khachhang")->with("nhanvien")->with("rooms")->get();

        // Return the data as JSON
        return response()->json($lichsudatphongs);
    }

}
