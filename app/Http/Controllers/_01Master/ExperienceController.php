<?php

namespace App\Http\Controllers\_01Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ExperienceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function experience()
    {
        return view('products.master.experience', [
            'judul' => 'Data Experience',
        ]);
    }
}
