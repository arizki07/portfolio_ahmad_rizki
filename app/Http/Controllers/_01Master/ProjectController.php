<?php

namespace App\Http\Controllers\_01Master;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        date_default_timezone_set('Asia/Jakarta');
        setlocale(LC_TIME, 'id_ID');
        \Carbon\Carbon::setLocale('id');
    }

    public function project()
    {
        return view('products.master.project', [
            'judul' => 'Data Project'
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'tgl_project' => 'required|date',
            'nama' => 'required|string',
            'keterangan' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $project = new Project();

        // Handle file upload
        if ($request->hasFile('foto')) {
            $fotoFile = $request->file('foto');

            $projectPath = $fotoFile->store('public/my_project');

            $projectFilename = basename($projectPath);
            $project->foto = $projectFilename;
        }

        $project->tgl_project = $request->input('tgl_project');
        $project->nama = $request->input('nama');
        $project->keterangan = $request->input('keterangan');
        $project->status = $request->input('status');
        $project->save();

        return redirect()->back()->with('success', 'Project created successfully!');
    }

    public function edit($id)
    {
        $data = Project::find($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        // Validasi permintaan
        $validator = Validator::make($request->all(), [
            'foto' => 'nullable|image|mimes:png,jpg,jpeg',
            'tgl_project' => 'required|date',
            'nama' => 'required|string',
            'keterangan' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        // Temukan project yang ada
        $project = Project::find($id);

        if (!$project) {
            return response()->json(['error' => 'Project not found'], 404);
        }

        // Jika ada foto baru diunggah, perbarui foto
        if ($request->hasFile('foto')) {
            $fotoFile = $request->file('foto');
            $projectPath = $fotoFile->store('public/my_project');
            $projectFilename = basename($projectPath);
            $project->foto = $projectFilename;
        }

        // Perbarui data lain
        $project->tgl_project = $request->input('tgl_project');
        $project->nama = $request->input('nama');
        $project->keterangan = $request->input('keterangan');
        $project->status = $request->input('status');

        // Simpan perubahan
        $project->save();

        return response()->json(['success' => 'Data successfully updated']);
    }
}
