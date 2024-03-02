<?php

namespace App\Http\Controllers;

use App\Models\DanhGia;
use App\Models\Evaluate;
use Illuminate\Http\Request;

class EvaluateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all DanhGia records with associated KhachHang and Phong
        $evaluates = Evaluate::paginate(2);

        // Return the data as JSON
        return response()->json($evaluates);
    }

}
