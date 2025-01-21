@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1>About Section</h1>
    @if ($abouts)
        <table class="table table-bordered">
            <tr>
                <th>Judul</th>
                <td>{{ $abouts->judul }}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{ $abouts->diskripsi }}</td>
            </tr>
            <tr>
                <th>Anggota 1</th>
                <td>
                    Nama: {{ $abouts->name_1 }} <br>
                    Jurusan: {{ $abouts->jurusan_1 }} <br>
                    Email: {{ $abouts->email_1 }}
                </td>
            </tr>
            <!-- Tambahkan anggota 2 dan 3 serupa -->
        </table>
        <a href="{{ route('admin.about.edit', $about->id) }}" class="btn btn-primary">Edit</a>
    @else
        <p>Data belum tersedia.</p>
    @endif
</div>
@endsection
