@extends('ketua.admin') <!-- Sesuaikan dengan layout utama yang kamu gunakan -->

@section('content')
<div class="container">
    <h1>Edit About</h1>

    <!-- Tampilkan pesan sukses jika ada -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tampilkan pesan error jika validasi gagal -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form Edit About -->
    <form action="{{ route('admin.about.update', $about->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="image_logo">Logo:</label>
            <input type="text" name="image_logo" id="image_logo" class="form-control" value="{{ $about->image_logo }}">
        </div>

        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ $about->judul }}" required>
        </div>

        <div class="form-group">
            <label for="diskripsi">Deskripsi:</label>
            <textarea name="diskripsi" id="diskripsi" class="form-control" required>{{ $about->diskripsi }}</textarea>
        </div>

        <div class="form-group">
            <label for="name_1">Nama Anggota 1:</label>
            <input type="text" name="name_1" id="name_1" class="form-control" value="{{ $about->name_1 }}" required>
        </div>

        <div class="form-group">
            <label for="email_1">Email Anggota 1:</label>
            <input type="email" name="email_1" id="email_1" class="form-control" value="{{ $about->email_1 }}" required>
        </div>

        <div class="form-group">
            <label for="no_hp_1">No HP Anggota 1:</label>
            <input type="text" name="no_hp_1" id="no_hp_1" class="form-control" value="{{ $about->no_hp_1 }}" required>
        </div>

        <div class="form-group">
            <label for="tmpt_tgl_1">Tempat & Tanggal Lahir Anggota 1:</label>
            <input type="text" name="tmpt_tgl_1" id="tmpt_tgl_1" class="form-control" value="{{ $about->tmpt_tgl_1 }}" required>
        </div>

        <div class="form-group">
            <label for="umur_1">Umur Anggota 1:</label>
            <input type="number" name="umur_1" id="umur_1" class="form-control" value="{{ $about->umur_1 }}" required>
        </div>

        <div class="form-group">
            <label for="bio_1">Bio Anggota 1:</label>
            <textarea name="bio_1" id="bio_1" class="form-control" required>{{ $about->bio_1 }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
