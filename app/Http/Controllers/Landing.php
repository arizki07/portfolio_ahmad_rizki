<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Landing extends Controller
{
    public function index()
    {
        return view('products.landing.home');
    }

    public function maintenance()
    {
        return view('products.landing.maintenance');
    }
}
