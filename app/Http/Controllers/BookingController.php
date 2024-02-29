<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    public function __construct()
    {

    }

    public function index()
    {
        $template = 'frontend.component.customer.bookRoom';
        return view('frontend.component.customer.layout', compact('template'));
    }
}
