<?php

namespace App\Http\Controllers;
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


    $gambarPath = null;

    if ($request->hasFile('gambar')) {
        $gambarPath = $request->file('gambar')->store('assets', 'public');
    }

    Berita::create([
        'judul' => $request->judul,
        'isi' => $request->isi,
        'gambar' => $gambarPath
    ]);

    return redirect()->route('beritas.index')->with('success', 'Berita berhasil ditambahkan.');
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
    public function landing($id = null)
    {

    $beritas = Berita::all(); // Ambil semua data berita
    // $selectedBerita = $id ? Berita::find($id) : null; // Berita yang dipilih jika ada ID

    return view('landing', compact('beritas'));
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
