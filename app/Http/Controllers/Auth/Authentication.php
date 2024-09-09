<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Authentication extends Controller
{
    public function index()
    {
        return view('authentication.login');
    }

    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "status" => false,
                'errors' => $validator->errors()
            ]);
        } else {
            if (Auth::attempt($request->only(["email", "password"]))) {
                return response()->json([
                    "status" => true,
                    "redirect" => url("dashboard"),
                ]);
            } else {
                return response()->json([
                    "status" => false,
                    "header" => "Invalid Credentials",
                    "errors" => ["Cek Email & Password Anda"],
                ]);
            }
        }
    }
}
