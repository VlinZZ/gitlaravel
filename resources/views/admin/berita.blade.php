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
                            <a href="{{ url('berita/Tambah_Berita') }}" class="btn btn-md btn-success mb-3">Tambah
                                Berita</a>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>GAMBAR</th>
                                        <th>JUDUL</th>
                                        <th>ISI</th>
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
                                                <a href="{{ route('beritas.show', $berita->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('beritas.edit', $berita->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                <form action="{{ route('beritas.destroy', $berita->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">Data tidak tersedia.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{--  {{ $beritas->links() }}  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
            //message with toastr
            @if (session()->has('success'))

                toastr.success('{{ session('success') }}', 'BERHASIL!');
            @elseif (session()->has('error'))

                toastr.error('{{ session('error') }}', 'GAGAL!');
            @endif
        </script>

    </body>

    </html>
@endsection
