<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('abouts.index', compact('abouts'));
    }
    
    public function edit($id)
    {
        // Cari data berdasarkan ID
        $abouts = About::findOrFail($id);

        // Return ke view dengan data yang ditemukan
        return view('abouts.edit', compact('abouts'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'image-logo' => 'nullable|string|max:255',
            'image-header' => 'nullable|string|max:255',
            'judul' => 'required|string|max:255',
            'diskripsi' => 'required|string',
            'image_1' => 'nullable|string|max:255',
            'name_1' => 'required|string|max:255',
            'email_1' => 'required|email',
            'No_hp_1' => 'required|string|max:255',
            'tmpt_tgl_1' => 'required|string|max:255',
            'umur_1' => 'required|string|max:255',
            'bio_1' => 'required|string',
            'image_2' => 'nullable|string|max:255',
            'name_2' => 'required|string|max:255',
            'email_2' => 'required|email',
            'No_hp_2' => 'required|string|max:255',
            'tmpt_tgl_2' => 'required|string|max:255',
            'umur_2' => 'required|string|max:255',
            'bio_2' => 'required|string',
            'image_3' => 'nullable|string|max:255',
            'name_3' => 'required|string|max:255',
            'email_3' => 'required|email',
            'No_hp_3' => 'required|string|max:255',
            'tmpt_tgl_3' => 'required|string|max:255',
            'umur_3' => 'required|string|max:255',
            'bio_3' => 'required|string',
        ]);

        // Cari data berdasarkan ID
        $abouts = About::findOrFail($id);

        // Perbarui data
        $abouts->update($validated);

        // Redirect ke halaman admin.about dengan pesan sukses
        return redirect()->route('admin.about')->with('success', 'Data berhasil diperbarui.');
    }

}
