<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


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

     // Menampilkan form register
     public function showRegisterForm()
     {
         return view('loginreg.register'); // Pastikan file ini dibuat
     }

     // Proses register
     public function register(Request $request)
     {
         // Validasi input user
         $validatedData = $request->validate([
             'nama' => ['required', 'string', 'max:255', 'unique:users,nama'],
             'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
             'password' => ['required', 'string', 'min:8', 'confirmed'],
         ]);

         // Membuat user baru
         User::create([
             'nama' => $validatedData['nama'],
             'email' => $validatedData['email'],
             'password' => Hash::make($validatedData['password']),
         ]);

         // Redirect ke login dengan pesan sukses
         return redirect()->route('login')->with('success', 'Akun berhasil dibuat. Silakan login.');
     }
}
