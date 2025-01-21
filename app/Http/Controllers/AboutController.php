<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{

    public function valin()
    {
        $about = about::first();
        return view('about.valin', ['about' => $about]);
    }
    public function rell()
    {
        $about = about::first();
        return view('about.rell', ['about' => $about]);
    }
    public function fiq()
    {
        $about = about::first();
        return view('about.fiq', ['about' => $about]);
    }

    public function index()
    {
        $abouts = about::first();
        return view('admin.about', ['abouts' => $abouts]);
    }

    public function edit($id)
    {

        $about = about::findOrFail($id);
        return view('admin.edit', compact('about'));
    }


    // Menyimpan update about
    public function update(Request $request, $id)
    {
        // Validasi about
        $request->validate([
            'image_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_header' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'judul' => 'required|string|max:255',
            'diskripsi' => 'required|string',

            'image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name_1' => 'required|string|max:255',
            'jurusan_1' => 'required|string|max:255',
            'anggota_1' => 'required|string|max:255',
            'email_1' => 'required|email',
            'no_hp_1' => 'required|string|max:255',
            'tmpt_tgl_1' => 'required|string|max:255',
            'umur_1' => 'required|string|max:255',
            'bio_1' => 'required|string',

            'image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name_2' => 'required|string|max:255',
            'jurusan_2' => 'required|string|max:255',
            'anggota_2' => 'required|string|max:255',
            'email_2' => 'required|email',
            'no_hp_2' => 'required|string|max:255',
            'tmpt_tgl_2' => 'required|string|max:255',
            'umur_2' => 'required|string|max:255',
            'bio_2' => 'required|string',

            'image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name_3' => 'required|string|max:255',
            'jurusan_3' => 'required|string|max:255',
            'anggota_3' => 'required|string|max:255',
            'email_3' => 'required|email',
            'no_hp_3' => 'required|string|max:255',
            'tmpt_tgl_3' => 'required|string|max:255',
            'umur_3' => 'required|string|max:255',
            'bio_3' => 'required|string',
        ]);



        $about = about::findOrFail($id);


        // untuk menerima semua inputan kecuali file

        $data = [
            'judul' => $request->judul,
            'diskripsi' => $request->diskripsi,
            'name_1' => $request->name_1,
            'jurusan_1' => $request->jurusan_1,
            'email_1' => $request->email_1,
            'no_hp_1' => $request->no_hp_1,
            'tmpt_tgl_1' => $request->tmpt_tgl_1,
            'umur_1' => $request->umur_1,
            'bio_1' => $request->bio_1,
            'name_2' => $request->name_2,
            'jurusan_2' => $request->jurusan_2,
            'email_2' => $request->email_2,
            'no_hp_2' => $request->no_hp_2,
            'tmpt_tgl_2' => $request->tmpt_tgl_2,
            'umur_2' => $request->umur_2,
            'bio_2' => $request->bio_2,
            'name_3' => $request->name_3,
            'jurusan_3' => $request->jurusan_3,
            'email_3' => $request->email_3,
            'no_hp_3' => $request->no_hp_3,
            'tmpt_tgl_3' => $request->tmpt_tgl_3,
            'umur_3' => $request->umur_3,
            'bio_3' => $request->bio_3,
        ];
        // funsctio hapus file
        $image_logo = $about->image_logo;
        $logo = $request->file('image_logo');
        if ($logo) {
            // berhubungan dengan storage
            $logo->storeAs('public/uploads', $logo->hashName());
            Storage::disk('local')->delete('public/uploads/' . $image_logo);

            // atribut database
            $data['image_logo'] = $logo->hashName();
        }


        $image_header = $about->image_header;
        $header = $request->file('image_header');
        if ($header) {
            $header->storeAs('public/uploads', $header->hashName());
            Storage::disk('local')->delete('public/uploads/' . $image_header);
            $data['image_header'] = $header->hashName();
        }



        $image_1 = $about->image_1;
        $foto_1 = $request->file('image_1');
        if ($foto_1) {
            $foto_1->storeAs('public/uploads', $foto_1->hashName());
            Storage::disk('local')->delete('public/uploads/' . $image_1);
            $data['image_1'] = $foto_1->hashName();
        }

        $image_2 = $about->image_2;
        $foto_2 = $request->file('image_2');
        if ($foto_2) {
            $foto_2->storeAs('public/uploads', $foto_2->hashName());
            Storage::disk('local')->delete('public/uploads/' . $image_2);
            $data['image_2'] = $foto_2->hashName();
        }

        $image_3 = $about->image_3;
        $foto_3 = $request->file('image_3');
        if ($foto_3) {
            $foto_3->storeAs('public/uploads', $foto_3->hashName());
            Storage::disk('local')->delete('public/uploads/' . $image_3);
            $data['image_3'] = $foto_3->hashName();
        }


        // dd($logo->hashname());
        $about->update($data);

        // Simpan about lainnya


        return redirect()->route('about.index')->with('success', 'about berhasil diperbarui.');
    }
}
