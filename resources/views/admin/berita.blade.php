@extends('ketua.admin')

@section('css')
<body style="background: lightgray">
@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Dibuat Oleh Sedikit Kemampuan dan sedikit keahlian Mrx Mile Random X</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ url('berita/Tambah_Berita') }}" class="btn btn-md btn-success mb-3">Tambah Berita</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>GAMBAR</th>
                                    <th>JUDUL</th>
                                    <th>ISI</th>
                                    <th>STATUS</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($item as $berita)
                                    <tr>
                                        <td>
                                            @if ($berita->gambar)
                                                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar Berita" style="width: 150px;">
                                            @else
                                                Tidak ada gambar
                                            @endif
                                        </td>
                                        <td>{{ $berita->judul }}</td>
                                        <td>{{ $berita->isi }}</td>
                                        <td>
                                            @if ($berita->status == 'pending')
                                                <span class="badge badge-warning">Pending</span>
                                            @elseif ($berita->status == 'approved')
                                                <span class="badge badge-success">Disetujui</span>
                                            @elseif ($berita->status == 'needs_improvement')
                                                <span class="badge badge-danger">Sedang diperbaiki</span>
                                            @else
                                                <span class="badge badge-secondary">Unknown</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('beritas.show', $berita->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                            <a href="{{ route('beritas.edit', $berita->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            <form action="{{ route('beritas.destroy', $berita->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>

                                            <!-- Tombol Approve -->
                                            @if ($berita->status == 'pending' || $berita->status == 'needs_improvement')
                                                <form action="{{ route('beritas.approve', $berita->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-sm btn-success">SETUJUI</button>
                                                </form>
                                            @endif

                                            <!-- Tombol Needs Improvement -->
                                            @if ($berita->status == 'pending' || $berita->status == 'approved')
                                                <form action="{{ route('beritas.improve', $berita->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit" class="btn btn-sm btn-warning">PERBAIKI</button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Data tidak tersedia.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
