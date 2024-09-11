<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Dashboard extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('products.dashboard');
    }

    public function updatePhoto(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $user = auth()->user();

        // Handle the file upload
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->store('profile_photos', 'public');

            $photoFilename = basename($photoPath);

            if ($user->foto && Storage::exists('public/profile_photos/' . $user->foto)) {
                Storage::delete('public/profile_photos/' . $user->foto);
            }

            $user->foto = $photoFilename;
            $user->save();
        }

        return redirect()->back()->with('success', 'Photo updated successfully.');
    }
}
