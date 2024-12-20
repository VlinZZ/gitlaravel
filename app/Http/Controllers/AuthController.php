<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('loginreg.login');
        // Pastikan file ini ada di: resources/views/loginreg/login.blade.php
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input user
        $credentials = $request->validate([
            'nama' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        // Autentikasi user
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirect ke halaman sidebar admin setelah berhasil login
            return redirect()->route('landing');
        }

        // Jika gagal, kirim pesan error
        return back()->withErrors([
            'loginError' => 'Nama atau Password salah.',
        ]);
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout(); // Logout user
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); // Redirect ke halaman login
    }
}
