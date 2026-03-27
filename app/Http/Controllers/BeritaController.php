<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Berita;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * index
     *
     * @return View
     */

    //index
    public function index(): View
    {
        $beritas = Berita::get();
        return view('admin.berita', ['item' => $beritas]);
    }

    //aprove inprove
    public function landing($id = null)
    {
        // Ambil hanya berita yang statusnya "approved"
        $beritas = Berita::where('status', 'approved')->get();

        $selectedBerita = $id ? Berita::find($id) : null;
        $about = About::first();

        return view('landing', compact('beritas', 'selectedBerita', 'about'));
    }
    public function approve($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->update([
            'status' => 'approved',
            'improve_notes' => null
        ]);

        return redirect()->back()->with('success', 'Berita berhasil disetujui!');
    }
    public function improve($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->update([
            'status' => 'needs_improvement',
            'improve_notes' => 'Silakan perbaiki berita ini sebelum disetujui.'
        ]);

        return redirect()->back()->with('error', 'Berita perlu diperbaiki!');
    }

    //create
    public function create()
    {
        return view('berita.Tambah_Berita');
    }
    //store
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        try {
            $gambarPath = null;

            if ($request->hasFile('gambar')) {
                $gambarPath = $request->file('gambar')->store('assets', 'public');
            }

            Berita::create([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'gambar' => $gambarPath,
                'status' => 'pending' // Tambahkan status default 'pending'
            ]);

            return redirect()->route('beritas.index')->with('success', 'Berita berhasil dikirim dan menunggu persetujuan.');
        } catch (\Throwable $e) {
            return redirect()->route('beritas.index')->with('error', 'Terjadi error : ' . $e->getMessage());
        }
    }


    //edit
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.edit', compact('berita'));
    }

    //update
    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            if ($berita->gambar) {
                Storage::delete('public/' . $berita->gambar);
            }
            $berita->gambar = $request->file('gambar')->store('assets', 'public');
        }

        $berita->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $berita->gambar
        ]);

        return redirect()->route('beritas.index')->with('success', 'Berita berhasil diupdate.');
    }


    //delete
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        if ($berita->gambar) {
            Storage::delete('public/' . $berita->gambar);
        }
        $berita->delete();

        return redirect()->route('beritas.index')->with('success', 'Berita berhasil dihapus.');
    }
    public function show($id)
    {
        $berita = Berita::findOrFail($id);

        return view('show', compact('berita'));
    }





    //contoh saja
    public function  joko()
    {
        return view('berita.joko');
    }

    public function  pbwo()
    {
        return view('berita.pbwo');
    }

    public function  bla()
    {
        return view('berita.bla');
    }

    public function  blo()
    {
        return view('berita.blo');
    }

    public function  Tambah_Berita()
    {
        return view('berita.Tambah_Berita');
    }
}
