@extends('ketua.admin')

@section('content')
<div class="container">
    <h1>Edit Data About</h1>
    <form action="{{ route('abouts.update', $about->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $about->judul }}">
        </div>
        <div class="mb-3">
            <label for="diskripsi" class="form-label">Diskripsi</label>
            <textarea class="form-control" id="diskripsi" name="diskripsi">{{ $about->diskripsi }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
