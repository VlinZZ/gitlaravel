<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Post - SantriKoding.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/show/show.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer/footer.css') }}">
</head>
@include('navbar')
    <div class="container mt-4">
    <body style="background: lightgray">
        <div class="container mt-5 pt-5">
            <div class="card p-4">
                <div class="card-header text-center">
                    <h3>{{ $berita->judul }}</h3>
                </div>
                <div class="card-body">
                    @if ($berita->gambar)
                        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar Berita" class="img-fluid mb-4">
                    @else
                        <p><em>Tidak ada gambar yang tersedia.</em></p>
                    @endif
                    <p>{!! $berita->isi !!}</p>
                    <div class="container mt-4">
                        <b>Penulis: Tim github ber 3</b>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <hr class="container mb-1">
                    <a href="{{ url('/') }}" class="btn-custom">Kembali ke Halaman Utama</a>
                </div>
            </div>
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </div>
    <hr class="container mb-2">
    <div class="content">
        @yield('content')
    </div>
    @include('footer/footer')
</body>
</html>
