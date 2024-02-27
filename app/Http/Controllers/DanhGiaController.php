<?php

namespace App\Http\Controllers;

use App\Models\DanhGia;
use Illuminate\Http\Request;

class DanhGiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all DanhGia records with associated KhachHang and Phong
        $danhgias = DanhGia::with("khachhang")->with("phong")->get();

        // Return the data as JSON
        return response()->json($danhgias);
    }

}
