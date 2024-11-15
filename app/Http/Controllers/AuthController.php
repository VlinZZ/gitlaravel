<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Ambil user berdasarkan email
        $user = User::where('email', $request->email)->first();

        // Periksa kecocokan password
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->intended('/admin/about');
        }

        return back()->withErrors(['email' => 'Email atau password salah']);
    }
}
