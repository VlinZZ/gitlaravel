<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function showLoginForm()
{
    return view('loginreg.login'); // Sesuaikan dengan path file Blade Anda
}

    public function login(Request $request)


{
    $credentials = $request->validate([
        'nama' => ['required', 'string'],
        'password' => ['required', 'string'],
    ]);

    // Cek kredensial
    if (Auth::attempt(['nama' => $credentials['nama'], 'password' => $credentials['password']])) {
        $request->session()->regenerate();
        // Mengarahkan ke route 'ketua.admin'
        return redirect()->route('ketua.admin');
    }

    return back()->withErrors([
        'loginError' => 'Nama atau Password salah.',
    ]);
}


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
