<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
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
