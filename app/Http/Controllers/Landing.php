<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class Landing extends Controller
{
    public function index()
    {
        $project = Project::all();
        return view('products.landing.home', [
            'project' => $project,
        ]);
    }

    public function maintenance()
    {
        return view('products.landing.maintenance');
    }
}
