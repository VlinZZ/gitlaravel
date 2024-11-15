<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Tampilkan semua profil
    public function index()
    {
        $profiles = Profile::all();
        return view('profiles.index', compact('profiles'));
    }

    // Form untuk menambah profil baru
    public function create()
    {
        return view('profiles.create');
    }

    // Simpan data profil baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'umur' => 'required|',
            'skill' => 'required',
            'anggota' => 'required',
            'bio' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        // Simpan gambar jika ada
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('profiles', 'public');
        }

        Profile::create($data);
        return redirect()->route('profiles.index')->with('success', 'Profil berhasil ditambahkan');
    }

    // Tampilkan detail profil
    public function show(Profile $profile)
    {
        return view('profiles.show', compact('profile'));
    }

    // Form untuk mengedit profil
    public function edit(Profile $profile)
    {
        return view('profiles.edit', compact('profile'));
    }

    // Update data profil
    public function update(Request $request, Profile $profile)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'umur' => 'required|',
            'skill' => 'required',
            'anggota' => 'required',
            'bio' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        // Update gambar jika ada gambar baru
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('profiles', 'public');
        }

        $profile->update($data);
        return redirect()->route('profiles.index')->with('success', 'Profil berhasil diperbarui');
    }

    // Hapus profil
    public function destroy(Profile $profile)
    {
        $profile->delete();
        return redirect()->route('profiles.index')->with('success', 'Profil berhasil dihapus');
    }
}

