<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function __construct()
    {

    }

    public function index()
    {
        $template = 'frontend.component.customer.post';
        return view('frontend.component.customer.layout', compact('template'));
    }
}
