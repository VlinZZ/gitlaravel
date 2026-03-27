@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1>About Section</h1>
    @if ($about)
        <table class="table table-bordered">
            <tr>
                <th>Judul</th>
                <td>{{ $about->judul }}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{ $about->diskripsi }}</td>
            </tr>
            <tr>
                <th>Anggota 1</th>
                <td>
                    Nama: {{ $about->name_1 }} <br>
                    Jurusan: {{ $about->jurusan_1 }} <br>
                    Email: {{ $about->email_1 }}
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
