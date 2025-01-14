@extends('ketua.admin')

@section('content')
<div class="container">
    <h1>Data About</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Logo</th>
                <th>Header</th>
                <th>Judul</th>
                <th>Diskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($abouts as $about)
            <tr>
                <td><img src="{{ $about->image_logo }}" alt="Logo" width="50"></td>
                <td><img src="{{ $about->image_header }}" alt="Header" width="50"></td>
                <td>{{ $about->judul }}</td>
                <td>{{ $about->diskripsi }}</td>
                <td>
                    <a href="{{ route('abouts.edit', $about->id) }}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
