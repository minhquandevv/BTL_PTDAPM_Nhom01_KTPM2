<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {

    }
    public function index()
    {
        $templete = 'frontend.home.index';
        return view('frontend.home.layout', compact('templete'));
    }
}