<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class Landing extends Controller
{
    public function index()
    {
        $project = Project::all();
        $pro = Project::count();
        return view('products.landing.home', [
            'project' => $project,
            'pro' => $pro,
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

    public function contact()
    {
        $users = User::all();
        return view('products.landing.contact', [
            'users' => $users
        ]);
    }

    public function portfolio()
    {
        $project = Project::all();
        return view('products.landing.portfolio', [
            'project' => $project,
        ]);
    }

    public function maintenance()
    {
        return view('products.landing.maintenance');
    }
    public function pengembangan()
    {
        return view('products.landing.pengembangan');
    }
}
