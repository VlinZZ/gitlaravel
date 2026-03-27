@extends('ketua.admin')

@section('content')
    <div class="container mt-3">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    

        <div class="card">
            <div class="card-header">
            </div>

            <div class="card-body">

                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('admin.edit', $abouts->id) }}" class="btn btn-warning">Edit</a>
                        </div>

                        <table class="table table-bordered table-striped table-hover">

                            <tr>
                                <th>Image Logo</th>
                                <td>
                                    @if ($abouts->image_logo)
                                        <img src="{{ asset('storage/uploads/' . $abouts->image_logo) }}" alt="Gambar Logo"
                                            width="100">
                                    @else
                                        <p>Gambar tidak tersedia.</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Image Header</th>
                                <td>
                                    @if ($abouts->image_header)
                                        <img src="{{ asset('storage/uploads/' . $abouts->image_header) }}"
                                            alt="Gambar Header" width="100">
                                    @else
                                        <p>Gambar tidak tersedia.</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Judul</th>
                                <td>{{ $abouts->judul }}</td>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                                <td>{{ $abouts->diskripsi }}</td>
                            </tr>
                            <tr>
                                <th>Image 1</th>
                                <td>
                                    @if ($abouts->image_1)
                                        <img src="{{ asset('storage/uploads/' . $abouts->image_1) }}" alt="Gambar Anggota 1"
                                            width="100">
                                    @else
                                        <p>Gambar tidak tersedia.</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Name 1</th>
                                <td>{{ $abouts->name_1 }}</td>
                            </tr>
                            <tr>
                                <th>Jurusan 1</th>
                                <td>{{ $abouts->jurusan_1 }}</td>
                            </tr>
                            <tr>
                                <th>Anggota 1</th>
                                <td>{{ $abouts->anggota_1 }}</td>
                            </tr>
                            <tr>
                                <th>Email 1</th>
                                <td>{{ $abouts->email_1 }}</td>
                            </tr>
                            <tr>
                                <th>No HP 1</th>
                                <td>{{ $abouts->no_hp_1 }}</td>
                            </tr>
                            <tr>
                                <th>Tempat Tinggal 1</th>
                                <td>{{ $abouts->tmpt_tgl_1 }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir 1</th>
                                <td>{{ $abouts->umur_1 }}</td>
                            </tr>
                            <tr>
                                <th>Bio 1</th>
                                <td>{{ $abouts->bio_1 }}</td>
                            </tr>
                            <tr>
                                <th>Image 2</th>
                                <td>
                                    @if ($abouts->image_2)
                                        <img src="{{ asset('storage/uploads/' . $abouts->image_2) }}" alt="Gambar Anggota 2"
                                            width="100">
                                    @else
                                        <p>Gambar tidak tersedia.</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Name 2</th>
                                <td>{{ $abouts->name_2 }}</td>
                            </tr>
                            <tr>
                                <th>Jurusan 2</th>
                                <td>{{ $abouts->jurusan_2 }}</td>
                            </tr>
                            <tr>
                                <th>Anggota 2</th>
                                <td>{{ $abouts->anggota_2 }}</td>
                            </tr>
                            <tr>
                                <th>Email 2</th>
                                <td>{{ $abouts->email_2 }}</td>
                            </tr>
                            <tr>
                                <th>No HP 2</th>
                                <td>{{ $abouts->no_hp_2 }}</td>
                            </tr>
                            <tr>
                                <th>Tempat Tinggal 2</th>
                                <td>{{ $abouts->tmpt_tgl_2 }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir 2</th>
                                <td>{{ $abouts->umur_2 }}</td>
                            </tr>
                            <tr>
                                <th>Bio 2</th>
                                <td>{{ $abouts->bio_2 }}</td>
                            </tr>

                            <tr>
                                <th>Image 3</th>
                                <td>
                                    @if ($abouts->image_3)
                                        <img src="{{ asset('storage/uploads/' . $abouts->image_3) }}" alt="Gambar Anggota 3"
                                            width="100">
                                    @else
                                        <p>Gambar tidak tersedia.</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Name 3</th>
                                <td>{{ $abouts->name_3 }}</td>
                            </tr>
                            <tr>
                                <th>Jurusan 3</th>
                                <td>{{ $abouts->jurusan_3 }}</td>
                            </tr>
                            <tr>
                                <th>Anggota 3</th>
                                <td>{{ $abouts->anggota_3 }}</td>
                            </tr>
                            <tr>
                                <th>Email 3</th>
                                <td>{{ $abouts->email_3 }}</td>
                            </tr>
                            <tr>
                                <th>No HP 3</th>
                                <td>{{ $abouts->no_hp_3 }}</td>
                            </tr>
                            <tr>
                                <th>Tempat Tinggal 3</th>
                                <td>{{ $abouts->tmpt_tgl_3 }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal lahir 3</th>
                                <td>{{ $abouts->umur_3 }}</td>
                            </tr>
                            <tr>
                                <th>Bio 3</th>
                                <td>{{ $abouts->bio_3 }}</td>
                            </tr>
                        </table>
            </div>
        </div>
    </div>
@endsection
