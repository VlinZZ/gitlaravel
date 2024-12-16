 @extends('ketua.admin')

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

         <form action="{{ route('admin.about.update', $about->id) }}" method="POST">
             @csrf
             @method('PUT')

             <div>
                 <label for="image-logo">Logo:</label>
                 <input type="text" name="image-logo" id="image-logo" value="{{ $about->{'image-logo'} }}"><br>
             </div>

             <div class="form-group">
                 <label for="judul">Judul:</label>
                 <input type="text" name="judul" id="judul" class="form-control" value="{{ $about->judul }}"
                     required>
             </div>

             <div class="form-group">
                 <label for="diskripsi">Diskripsi:</label>
                 <textarea name="diskripsi" id="diskripsi" class="form-control" required>{{ $about->diskripsi }}</textarea>
             </div>

             <div class="form-group">
                 <label for="name_1">Nama Anggota 1:</label>
                 <input type="text" name="name_1" id="name_1" class="form-control" value="{{ $about->name_1 }}"
                     required>
             </div>

             <div class="form-group">
                 <label for="email_1">Email Anggota 1:</label>
                 <input type="email" name="email_1" id="email_1" class="form-control" value="{{ $about->email_1 }}"
                     required>
             </div>

             <!-- Tambahkan input lainnya sesuai kebutuhan -->

             <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
         </form>
     </div>

     
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
                                                 <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar Berita"
                                                     style="width: 150px;">
                                             @else
                                                 Tidak ada gambar
                                             @endif
                                         </td>
                                         <td>{{ $berita->judul }}</td>
                                         <td>{{ $berita->isi }}</td>
                                         <td>
                                             <a href="{{ route('beritas.show', $berita->id) }}"
                                                 class="btn btn-sm btn-dark">SHOW</a>
                                             <a href="{{ route('beritas.edit', $berita->id) }}"
                                                 class="btn btn-sm btn-primary">EDIT</a>
                                             <form action="{{ route('beritas.destroy', $berita->id) }}" method="POST"
                                                 style="display:inline;">
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
