<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
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

    public function about()
    {
        $education = Education::all();
        $experience = Experience::all();
        return view('products.landing.about', [
            'education' => $education,
            'experience' => $experience,
        ]);
    }

    public function maintenance()
    {
        return view('products.landing.maintenance');
    }
}
