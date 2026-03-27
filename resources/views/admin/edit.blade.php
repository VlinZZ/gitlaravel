@extends('ketua.admin')

@section('content')

    <div class="container mt-3">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container mt-3">
            <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="image_logo">Image Logo</label>
                    <input type="file" name="image_logo" id="image_logo" class="form-control">
                    @if ($about->image_logo)
                        <img src="{{ asset('storage/' . $about->image_logo) }}" alt="Image Logo" width="100"
                            class="mt-3">
                    @endif
                </div>

                <div class="form-group mb-3">
                    <label for="image_header">Image Header</label>
                    <input type="file" name="image_header" id="image_header" class="form-control">
                    @if ($about->image_header)
                        <img src="{{ asset('storage/' . $about->image_header) }}" alt="Image Header" width="100"
                            class="mt-3">
                    @endif

                </div>

                <div class="form-group mb-3">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control" value="{{ $about->judul }}"
                        required>
                </div>

                <div class="form-group mb-3">
                    <label for="diskripsi">Deskripsi</label>
                    <input type="text" name="diskripsi" id="diskripsi" class="form-control"
                        value="{{ $about->diskripsi }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="image_1">Image 1</label>
                    <input type="file" name="image_1" id="image_1" class="form-control">
                    @if ($about->image_1)
                        <img src="{{ asset('storage/' . $about->image_1) }}" alt="Image 1" width="100" class="mt-3">
                    @endif
                </div>

                <div class="form-group mb-3">
                    <label for="name_1">Nama 1</label>
                    <input type="text" name="name_1" id="name_1" class="form-control" value="{{ $about->name_1 }}"
                        required>
                </div>

                <div class="form-group mb-3">
                    <label for="jurusan_1">Jurusan 1</label>
                    <input type="text" name="jurusan_1" id="jurusan_1" class="form-control"
                        value="{{ $about->jurusan_1 }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="anggota_1">Anggota 1</label>
                    <input type="text" name="anggota_1" id="anggota_1" class="form-control"
                        value="{{ $about->anggota_1 }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="email_1">Email 1</label>
                    <input type="email" name="email_1" id="email_1" class="form-control" value="{{ $about->email_1 }}"
                        required>
                </div>

                <div class="form-group mb-3">
                    <label for="no_hp_1">No HP 1</label>
                    <input type="text" name="no_hp_1" id="no_hp_1" class="form-control" value="{{ $about->no_hp_1 }}"
                        required>
                </div>

                <div class="form-group mb-3">
                    <label for="tmpt_tgl_1">Tempat tinggal 1</label>
                    <input type="text" name="tmpt_tgl_1" id="tmpt_tgl_1" class="form-control"
                        value="{{ $about->tmpt_tgl_1 }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="umur_1">Tanggal Lahir 1</label>
                    <input type="date" name="umur_1" id="umur_1" value="{{ $about->umur_1 }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="bio_1">Bio 1</label>
                    <input type="text" name="bio_1" id="bio_1" class="form-control"
                        value="{{ $about->bio_1 }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="image_2">Image 2</label>
                    <input type="file" name="image_2" id="image_2" class="form-control">
                    @if ($about->image_2)
                        <img src="{{ asset('storage/' . $about->image_3) }}" alt="Image 1" width="100"
                            class="mt-3">
                    @endif
                </div>

                <div class="form-group mb-3">
                    <label for="name_2">Nama 2</label>
                    <input type="text" name="name_2" id="name_2" class="form-control"
                        value="{{ $about->name_2 }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="jurusan_2">jurusan 2</label>
                    <input type="text" name="jurusan_2" id="jurusan_2" class="form-control"
                        value="{{ $about->jurusan_2 }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="anggota_2">Anggota 2</label>
                    <input type="text" name="anggota_2" id="anggota_2" class="form-control"
                        value="{{ $about->anggota_2 }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="email_2">Email 2</label>
                    <input type="email" name="email_2" id="email_2" class="form-control"
                        value="{{ $about->email_2 }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="no_hp_2">No HP 2</label>
                    <input type="text" name="no_hp_2" id="no_hp_2" class="form-control"
                        value="{{ $about->no_hp_2 }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="tmpt_tgl_2">Tempat Tinggal 2</label>
                    <input type="text" name="tmpt_tgl_2" id="tmpt_tgl_2" class="form-control"
                        value="{{ $about->tmpt_tgl_2 }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="umur_2">Tanggal Lahir 2</label>
                    <input type="date" name="umur_2" id="umur_2" value="{{ $about->umur_2 }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="bio_2">Bio 2</label>
                    <input type="text" name="bio_2" id="bio_2" class="form-control"
                        value="{{ $about->bio_2 }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="image_3">Image 3</label>
                    <input type="file" name="image_3" id="image_3" class="form-control">
                    @if ($about->image_3)
                        <img src="{{ asset('storage/' . $about->image_3) }}" alt="Image 1" width="100"
                            class="mt-3">
                    @endif
                </div>

                <div class="form-group mb-3">
                    <label for="name_3">Nama 3</label>
                    <input type="text" name="name_3" id="name_3" class="form-control"
                        value="{{ $about->name_3 }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="jurusan_3">Jurusan 3</label>
                    <input type="text" name="jurusan_3" id="jurusan_3" class="form-control"
                        value="{{ $about->jurusan_3 }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="anggota_3">Anggota 3</label>
                    <input type="text" name="anggota_3" id="anggota_3" class="form-control"
                        value="{{ $about->anggota_3 }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="email_3">Email 3</label>
                    <input type="email" name="email_3" id="email_3" class="form-control"
                        value="{{ $about->email_3 }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="no_hp_3">No HP 3</label>
                    <input type="text" name="no_hp_3" id="no_hp_3" class="form-control"
                        value="{{ $about->no_hp_3 }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="tmpt_tgl_3">Tempat Tinggal 3</label>
                    <input type="text" name="tmpt_tgl_3" id="tmpt_tgl_3" class="form-control"
                        value="{{ $about->tmpt_tgl_3 }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="umur_3">Tanggal Lahir 3</label>
                    <input type="date" name="umur_3" id="umur_3" value="{{ $about->umur_3 }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="bio_3">Bio 3</label>
                    <input type="text" name="bio_3" id="bio_3" class="form-control"
                        value="{{ $about->bio_3 }}" required>
                </div>



                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('abouts.index') }}" class="btn btn-secondary">Kembali</a>

            </form>
        </div>
    @endsection
