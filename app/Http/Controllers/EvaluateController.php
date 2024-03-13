<?php

namespace App\Http\Controllers;


use App\Models\Evaluate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EvaluateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all DanhGia records with associated KhachHang and Phong
        $results = DB::table('danhgia_nhanxet')
            ->join('datphong', 'danhgia_nhanxet.MaDanhGia', '=', 'datphong.MaDatPhong')
            ->where('datphong.MaPhong', 'like', '38')
            ->select('danhgia_nhanxet.*')
            ->get();
        echo $results;
    }

}
