<?php

namespace App\Http\Controllers\_01Master;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class ExperienceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        date_default_timezone_set('Asia/Jakarta');
        setlocale(LC_TIME, 'id_ID');
        \Carbon\Carbon::setLocale('id');
    }

    public function experience()
    {
        return view('products.master.experience', [
            'judul' => 'Data Experience',
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tanggal' => 'required|date',
            'jobs' => 'required',
            'company' => 'required',
            'keterangan' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $experience = new Experience();
        $experience->tanggal = $request->input('tanggal');
        $experience->jobs = $request->input('jobs');
        $experience->company = $request->input('company');
        $experience->keterangan = $request->input('keterangan');
        $experience->save();

        return redirect()->back()->with('success', 'Data experience successfully created');
    }

    public function edit($id)
    {
        $data = Experience::find($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $experience = Experience::find($id);
        $experience->update($request->all());

        return response()->json(['success' => 'Data successfully updated']);
    }
}
