<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();
        return view('beritas.index', compact('beritas'));
    }

    public function create()
    {
        return view('beritas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('images', 'public');
        }

        Berita::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $gambarPath
        ]);

        return redirect()->route('beritas.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('beritas.edit', compact('berita'));
    }

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
            $berita->gambar = $request->file('gambar')->store('images', 'public');
        }

        $berita->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $berita->gambar
        ]);

        return redirect()->route('beritas.index')->with('success', 'Berita berhasil diupdate.');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        if ($berita->gambar) {
            Storage::delete('public/' . $berita->gambar);
        }
        $berita->delete();

        return redirect()->route('beritas.index')->with('success', 'Berita berhasil dihapus.');
    }
    
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
