<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('admin.about', compact('abouts'));
    }



    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('admin.about.edit', compact('about'));
    }


    // Menyimpan update data
    public function update(Request $request, $id)
    {
        // Validasi data
          $request->validate([
            'image_logo' => 'nullable|string|max:255',
            'image_header' => 'nullable|string|max:255',
            'judul' => 'required|string|max:255',
            'diskripsi' => 'required|string',
            'image_1' => 'nullable|string|max:255',
            'name_1' => 'required|string|max:255',
            'email_1' => 'required|email',
            'no_hp_1' => 'required|string|max:255',
            'tmpt_tgl_1' => 'required|string|max:255',
            'umur_1' => 'required|string|max:255',
            'bio_1' => 'required|string',
            'image_2' => 'nullable|string|max:255',
            'name_2' => 'required|string|max:255',
            'email_2' => 'required|email',
            'no_hp_2' => 'required|string|max:255',
            'tmpt_tgl_2' => 'required|string|max:255',
            'umur_2' => 'required|string|max:255',
            'bio_2' => 'required|string',
            'image_3' => 'nullable|string|max:255',
            'name_3' => 'required|string|max:255',
            'email_3' => 'required|email',
            'no_hp_3' => 'required|string|max:255',
            'tmpt_tgl_3' => 'required|string|max:255',
            'umur_3' => 'required|string|max:255',
            'bio_3' => 'required|string',
        ]);

        $about = About::findOrFail($id);
        $about->update($request->all());

        // Redirect kembali ke halaman edit dengan pesan sukses
        return redirect()->route('admin.about')->with('success', 'Data updated successfully');
    }
}
