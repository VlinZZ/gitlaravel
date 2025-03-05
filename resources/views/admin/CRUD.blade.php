@extends('ketua.admin')

@section('content')
    <h1 align="left">ADMIN LANDING PAGE</h1>

    <!-- Kata-Kata Sambutan -->
    <div class="container mt-4">
        <div class="alert alert-success text-center">
            <h2>Selamat Datang, {{ Auth::user()->name }}!</h2>
            <p>Semoga harimu menyenangkan dan produktif.</p>
        </div>
    </div>

    <!-- Konten Lain -->
    <div class="container">
        <h3 align="center">Ini adalah halaman utama admin.</h3>
    </div>

@endsection
