<?php

namespace App\Http\Controllers\_01Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class EducationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        date_default_timezone_set('Asia/Jakarta');
        setlocale(LC_TIME, 'id_ID');
        \Carbon\Carbon::setLocale('id');
    }

    public function educate()
    {
        return view('products.master.education', [
            'judul' => 'Data Education'
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'periode' => 'required|regex:/^\d{4}-\d{4}$/',
            'jurusan' => 'required',
            'school' => 'required',
            'keterangan' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        DB::table('education')->insert([
            'periode' => $request->input('periode'),
            'jurusan' => $request->input('jurusan'),
            'school' => $request->input('school'),
            'keterangan' => $request->input('keterangan'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Data successfully created');
    }
}
