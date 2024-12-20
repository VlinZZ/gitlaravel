<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function valin()
    {
        return view('about.valin');
    }
    public function rell()
    {
        return view('about.rell');
    }
    public function fiq()
    {
        return view('about.fiq');
    }

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
            'image_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_header' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required|string|max:255',
            'diskripsi' => 'required|string',
            'image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name_1' => 'required|string|max:255',
            'email_1' => 'required|email',
            'no_hp_1' => 'required|string|max:255',
            'tmpt_tgl_1' => 'required|string|max:255',
            'umur_1' => 'required|string|max:255',
            'bio_1' => 'required|string',
            'image_2' => 'nullableimage|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name_2' => 'required|string|max:255',
            'email_2' => 'required|email',
            'no_hp_2' => 'required|string|max:255',
            'tmpt_tgl_2' => 'required|string|max:255',
            'umur_2' => 'required|string|max:255',
            'bio_2' => 'required|string',
            'image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name_3' => 'required|string|max:255',
            'email_3' => 'required|email',
            'no_hp_3' => 'required|string|max:255',
            'tmpt_tgl_3' => 'required|string|max:255',
            'umur_3' => 'required|string|max:255',
            'bio_3' => 'required|string',
        ]);

        $about = About::findOrFail($id);

        $image_logo = $about->image_logo;
        if ($request->hasFile('image_logo')) {
            if ($image_logo && file_exists(storage_path('app/public/uploads/' . $image_logo))) {
                unlink(storage_path('app/public/uploads/' . $image_logo));
            }
            $about->image_logo = $request->file('image_logo')->store('uploads', 'public');

        }
        $image_header = $about->image_header;
        if ($request->hasFile('image_header')) {
            if ($image_header && file_exists(storage_path('app/public/uploads/' . $image_header))) {
                unlink(storage_path('app/public/uploads/' . $image_header));
            }
            $about->image_header = $request->file('image_header')->store('uploads', 'public');
        }
        $image_1 = $about->image_1;
        if ($request->hasFile('image_1')) {
            if ($image_1 && file_exists(storage_path('app/public/uploads/' . $image_1))) {
                unlink(storage_path('app/public/uploads/' . $image_1));
            }
            $about->image_1 = $request->file('image_1')->store('uploads', 'public');
        }
        $image_2 = $about->image_2;
        if ($request->hasFile('image_2')) {
            if ($image_2 && file_exists(storage_path('app/public/uploads/' . $image_2))) {
                unlink(storage_path('app/public/uploads/' . $image_2));
            }
            $about->image_2 = $request->file('image_2')->store('uploads', 'public');
        }
        $image_3 = $about->image_3;
        if ($request->hasFile('image_3')) {
            if ($image_3 && file_exists(storage_path('app/public/uploads/' . $image_2))) {
                unlink(storage_path('app/public/uploads/' . $image_3));
            }
            $about->image_3 = $request->file('image_3')->store('uploads', 'public');
        }
+
        $about->update([
            'image_logo' => $about->image_logo,
            'image_header' => $about->image_header,
            'judul' => $request->judul,
            'diskripsi' => $request->deskripsi,
            'image_1' => $about->image_1,
            'name_1' => $request->name_1,
            'skil_1' => $request->skil_1,
            'email_1' => $request->email_1,
            'phone_1' => $request->phone_1,
            'alamat_1' => $request->alamat_1,
            'tanggallahir_1' => $request->tanggallahir_1,
            'bio_1' => $request->bio_1,
            'image_2' => $about->image_2,
            'name_2' => $request->name_2,
            'skil_2' => $request->skil_2,
            'email_2' => $request->email_2,
            'phone_2' => $request->phone_2,
            'alamat_2' => $request->alamat_2,
            'tanggallahir_2' => $request->tanggallahir_2,
            'bio_2' => $request->bio_2,
        ]);

        // Redirect kembali ke halaman edit dengan pesan sukses
        return redirect()->route('admin.about')->with('success', 'Data updated successfully');
    }
}
