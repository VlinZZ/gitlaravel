@extends('admin.ketua')

@section('content')
<div class="container">
    <h1>Edit About</h1>

    <!-- Tampilkan pesan error validasi -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.about.update', $abouts->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="image-logo">Logo:</label>
             <input type="text" name="image-logo" id="image-logo" value="{{ $abouts->{'image-logo'} }}"><br>
        </div>

        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ $abouts->judul }}" required>
        </div>

        <div class="form-group">
            <label for="diskripsi">Diskripsi:</label>
            <textarea name="diskripsi" id="diskripsi" class="form-control" required>{{ $abouts->diskripsi }}</textarea>
        </div>

        <div class="form-group">
            <label for="name_1">Nama Anggota 1:</label>
            <input type="text" name="name_1" id="name_1" class="form-control" value="{{ $abouts->name_1 }}" required>
        </div>

        <div class="form-group">
            <label for="email_1">Email Anggota 1:</label>
            <input type="email" name="email_1" id="email_1" class="form-control" value="{{ $abouts->email_1 }}" required>
        </div>

        <!-- Tambahkan input lainnya sesuai kebutuhan -->

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
