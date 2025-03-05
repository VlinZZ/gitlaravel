<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Menampilkan semua pengguna
        $users = User::all();
        return view('admin.user', compact('users'));
    }

    public function create()
    {
        // Menampilkan formulir untuk membuat pengguna baru
        return view('admin.user_create');
    }

    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Membuat pengguna baru
        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),  // Password di-hash untuk keamanan
            'status' => 'aktif',
        ]);

        return redirect()->route('admin.user')->with('success', 'User berhasil ditambahkan.');
    }

    public function edit(User $user)
    {

        // Menampilkan formulir untuk mengedit pengguna
        return view('admin.user_edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        dd($request);
        // Validasi data input
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        // Mengupdate data pengguna
        $user->update([
            'nama' => $request->nama,
            'email' => $request->email,
            // Mengupdate password hanya jika ada input baru
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        return redirect()->route('admin.user')->with('success', 'User berhasil diupdate.');
    }

    public function destroy($id)
    {
        // Menghapus pengguna berdasarkan ID
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.user')->with('success', 'User berhasil dihapus.');
    }

    // Fungsionalitas Tambahan Admin
    public function getFirstUser()
    {
        $user = User::first();
        return response()->json($user);
    }

    public function getUserByCondition($email)
    {
        $user = User::where('email', $email)->first();
        return response()->json($user);
    }

    public function toggleStatus($id)
    {
        $user = User::findOrfail($id);
        $user->status = $user->status ==='aktif' ? 'tidak_aktif' : 'aktif';
        $user->save();

        return redirect()->route('admin.user')->with('success', 'Status pengguna berhasil diubah.');
    }
}
