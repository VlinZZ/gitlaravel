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
        $request->validate([
            'nama' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        // Cari user berdasarkan nama
        $user = User::where('nama', $request->nama)->first();

        // Cek apakah user ditemukan
        if (!$user) {
            return back()->withErrors(['loginError' => 'Nama atau Password salah.']);
        }

        // Cek status user sebelum login
        if ($user->status === 'tidak_aktif') {
            return back()->withErrors([
                'loginError' => 'Akun anda tidak aktif. Silakan hubungi admin.',
            ]);
        }

        // Cek password dan autentikasi
        if (Auth::attempt(['nama' => $request->nama, 'password' => $request->password], $request->remember)) {
            $request->session()->regenerate();

            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.CRUD'); // Redirect admin
            } else {
                return redirect()->route('landing'); // Redirect user biasa
            }
        }

        // Jika gagal login
        return back()->withErrors(['loginError' => 'Nama atau Password salah.']);
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
        $user =  User::create([
             'nama' => $validatedData['nama'],
             'email' => $validatedData['email'],
             'password' => Hash::make($validatedData['password']),
             'role' => 'user',
         ]);

         Auth::login($user);
             // Redirect ke login dengan pesan sukses
         return redirect()->route('login')->with('success', 'Akun berhasil dibuat. Silakan login.');
     }
}
