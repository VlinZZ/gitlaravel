<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</body>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3>Edit Berita</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('beritas.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" class="form-control" value="{{ $berita->judul }}" required>
                </div>

                <div class="form-group">
                    <label for="isi">Isi</label>
                    <textarea name="isi" class="form-control" rows="5" required>{{ $berita->isi }}</textarea>
                </div>

                <div class="form-group">
                    <label for="gambar">Gambar</label>
                    @if ($berita->gambar)
                        <p><img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar Berita" class="img-thumbnail" width="150"></p>
                    @endif
                    <input type="file" name="gambar" class="form-control">
                </div>
                <hr class="container mb-1">
                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                <a href="{{ route('beritas.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
