<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link rel="stylesheet" href="css/Tambah_Berita.css"> -->

  </head>
  <body class="d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-6 col-lg-4 rounded shadow-lg p-5 bg-white form-container">
      <a href="../" class="fa fa-arrow-left" aria-hidden="true"> Back</a>

      <h2 class="text-center mb-4">Tambah Berita</h2>
      <form>
        <div class="mb-3">
          <label for="judulBerita" class="form-label">Judul Berita</label>
          <input type="text" class="form-contro l" id="judulBerita" placeholder="Masukkan judul berita">
        </div>
        <div class="mb-3">
          <label for="isiBerita" class="form-label">Isi Berita</label>
          <textarea class="form-control" id="isiBerita" rows="5" placeholder="Tulis isi berita"></textarea>
        </div>
        <div class="mb-3">
          <label for="tanggalBerita" class="form-label">Tanggal</label>
          <input type="date" class="form-control" id="tanggalBerita">
        </div>
        <button type="submit" class="btn bg-black text-light w-100">Simpan Berita</button>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
