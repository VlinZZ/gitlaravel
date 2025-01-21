<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farel Yuhandriza Putra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-mQ93Kz2Zn8sR0CAx2s5A/BB8zS3I/hz9pHmhmA2GTV8MWRnx1B90i3PkiRH9Czc4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/aboutadmin/fiq.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer/footer.css') }}">
</head>

<body>
    <style>
        body,
        a:hover {
            cursor: url(http://cur.cursors-4u.net/cursors/cur-9/cur862.ani), url(http://cur.cursors-4u.net/cursors/cur-9/cur862.png), progress !important;
        }
    </style>
    <script type="text/javascript" src="https://drvee07.github.io/loc/rev.js"></script>
    @include('navbar')
    <div class="container mt-4">
        <hr class="container mt-5 mb-5">
            <a href="{{ url('/') }}" style="font-size:25px; font-family: Cambria, Times New Roman, serif;">
                <button class="responsive-button">Back To About</button>
            </a>
        <hr class="container mb-1">
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('assets/taufiq.jpg')}}" alt="Profile Picture" class="img-responsive">
            </div>
            <div class="col-md-8">
                <h1> {{$about->name_3 }} </h1>
                <p> {{$about->jurusan_3}} </p>
                <div class="table-container">
                    <table class="table-color">
                        <tbody>
                            <tr>
                                <td>Anggota</td>
                                <td>{{$about->anggota_3 ?? 'Anggota tidak tersedia'}}</td>
                            </tr>
                            <tr>
                                <td>Email User</td>
                                <td>{{$about->email_3 ?? 'Email tidak tersedia'}}</td>
                            </tr>
                            <tr>
                                <td>Nomor HP</td>
                                <td>{{$about->no_hp_3 ?? 'No HP tidak tersedia'}}</td>
                            </tr>
                            <tr>
                                <td>Tempat Tinggal</td>
                                <td>{{$about->tmpt_tgl_3 ?? 'Tempat tidak tersedia'}}</td>
                            </tr>
                            <tr>
                                <td>Umur</td>
                                <td>{{$about->umur_3 ?? 'Umur tidak tersedia'}}</td>
                            </tr>
                            <tr>
                                <td>Bio Profil</td>
                                <td>{{$about->bio_3 ?? 'Bio tidak tersedia'}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ksm1fpv+Pe6inMX+dQ0iIeMb60ayrO1r5jyyxYFJF5whClc52UPPnxI5BeQK7V/7" crossorigin="anonymous">
    </script>
    <hr class="container mb-5">
    <div class="content">
        @yield('content')
    </div>
    @include('footer/footer')
</body>

</html>
