<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::all();
        return view('about.index', compact('about'));
    }

    public function edit($id)
{
    $about = About::findOrFail($id);  // Ambil data dari database

    dd($about); // Digunakan untuk menampilkan dan menghentikan eksekusi (debugging)

    // Setelah dd, kode ini tidak akan dijalankan sampai Anda menghapus dd
    return view('admin.about', compact('about'));
}



    public function update(Request $request, $id)
    {
        // Validasi data
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

        // Temukan data berdasarkan ID
        $about = About::findOrFail($id);

        // Perbarui data
        $about->update($validated);

        return redirect()->route('admin.about.edit', $id)->with('success', 'Updated successfully!');
    }
}
