@extends('index')

@section('title', 'landing')

@section('content')

    {{-- header --}}

    <div class="bg-body-tertiary">
        <div class="container mt-5 pt-5">
            <div class="card p-4">
                <div class="row">


                    <div class="col-md-6">
                        <img src="{{ isset($about->image_header) ? asset('storage/uploads/' . $about->image_header) : asset('default-image-jpg') }}"
                            class="img-fluid" alt="Kelompok" width="500">
                    </div>

                    <div class="col-md-6">
                        <h2 class="mb-3">{{ $about->judul }}</h2>
                        <p class="text-muted">"Hasil Kerja Kami Bertiga"</p>
                        <p>{{ $about->diskripsi }}</p>
                    </div>


                </div>
            </div>
        </div>
    </div>

    {{-- about --}}
    <script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/content/location/location.js"
        id="eppiocemhmnlbhjplcgkofciiegomcon"></script>
    <script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script>
    <script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kerja Kelompok</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-mQ93Kz2Zn8sR0CAx2s5A/BB8zS3I/hz9pHmhmA2GTV8MWRnx1B90i3PkiRH9Czc4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/content/location/location.js"
        id="eppiocemhmnlbhjplcgkofciiegomcon"></script>
    <script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.prinsh.com/NathanPrinsley-textstyle/nprinsh-stext.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <section id="about-section" class="about-section container mt-5">
        <script type="text/javascript" src="https://drvee07.github.io/loc/rev.js"></script>
        <h1 class="nprinsleyy nprinsley-text-glitchan" style="font-size:50px; font-family: Cambria,Times New Roman,serif;"
            align="center">
            <font color="black">About Us </font>
        </h1>
        <div class="card p-3">
            <div class="row">
                <div class="about-card-container d-flex justify-content-center gap-4 flex-wrap">

                    <div class="about-card card">
                        <div class="card h-100 card-about shadow-sm">
                            <img src="{{ asset('storage/uploads/' . $about->image_1) }}" alt="Gambar Anggota 1"
                                width="100" class="card-img-top">
                            <div class="card-body">
                                <h3>{{ $about->name_1 }}</h3>
                                <p class="card-text">Informasi tentang Saya</p>
                                <a href="{{ route('about.valin') }}" class="btn btn-about">Lihat</a>

                            </div>
                        </div>
                    </div>
                    <div class="about-card card">
                        <img src="{{ asset('storage/uploads/' . $about->image_2) }}" alt="Gambar Anggota 2" width="100"
                            class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title">{{ $about->name_2 }}</h3>
                            <p class="card-text">Informasi tentang Saya</p>
                            <a href="{{ route('about.rell') }}" class="btn btn-about">Lihat</a>
                        </div>
                    </div>

                    <div class="about-card card">
                        <img src="{{ asset('storage/uploads/' . $about->image_3) }}" alt="Gambar Anggota 3" width="100"
                            class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title">{{{ $about->name_3}}}</h3>
                            <p class="card-text">Informasi tentang Saya</p>
                            <a href="{{ route('about.fiq') }}" class="btn btn-about">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- berita --}}
    <section id="berita-section" class="berita-section container mt-5">
        <script type="text/javascript" src="https://drvee07.github.io/loc/rev.js"></script>
        <h1 class="nprinsleyy nprinsley-text-glitchan" style="font-size:50px; font-family: Cambria,Times New Roman,serif;"
            align="center">
            <font color="black">Berita </font>
        </h1>

        <div class="card p-4">
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ url('berita/Tambah_Berita') }}" class="btn-add-news">Tambah Berita</a>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <a href="{{ route('berita.joko') }}" class="text-decoration-none">
                        <div class="card berita-card">
                            <img src="assets/joko.jpeg" class="card-img-top" alt="Foto Berita 1">
                            <div class="berita-card-overlay">
                                <h5 class="card-title">Virall Joko Widodo...</h5>
                                <p class="card-text">Jokowi Tidak Salami Mantan Wapres Try Sutrisno, Istana Beri Klarifikasi
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Berita 2 -->
                <div class="col-md-6 mb-4">
                    <a href="{{ route('berita.pbwo') }}" class="text-decoration-none">
                        <div class="card berita-card">
                            <img src="assets/pbwo.jpeg" class="card-img-top" alt="Foto Berita 2">
                            <div class="berita-card-overlay">
                                <h5 class="card-title">Untung Rugi Jika Gugatan Pencalonan Gibran Dikabulkan PTUN Jakarta
                                </h5>
                                <p class="card-text">Majelis hakim Pengadilan Tata Usaha Negara atau PTUN Jakarta akan
                                    membacakan putusan...</p>
                            </div>
                        </div>
                    </a>
                </div>
                @foreach ($beritas as $berita)
                    <div class="col-md-6 mb-4">
                        <a href="{{ route('landing.show', $berita->id) }}" class="text-decoration-none">
                            <div class="card berita-card">
                                <img src="{{ asset('storage/' . $berita->gambar) }}" class="card-img-top"
                                    alt="{{ $berita->judul }}">
                                <div class="berita-card-overlay">
                                    <h5 class="card-title">{{ $berita->judul }}</h5>
                                    <p class="card-text">{{ \Illuminate\Support\Str::limit($berita->isi, 100) }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                <!-- Berita 3 -->
                <div class="col-md-6 mb-4">
                    <a href="{{ route('berita.bla') }}" class="text-decoration-none">
                        <div class="card berita-card">
                            <img src="assets/bla.jpeg" class="card-img-top" alt="Foto Berita 3">
                            <div class="berita-card-overlay">
                                <h5 class="card-title">Barcelona Dikabarkan akan Rekrut...</h5>
                                <p class="card-text">Neymar Jr Sebelum Datangkan Bintang Manchester City, Erling Haaland
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Berita 4 -->
                <div class="col-md-6 mb-4">
                    <a href="{{ route('berita.blo') }}" class="text-decoration-none">
                        <div class="card berita-card">
                            <img src="assets/blo.jpeg" class="card-img-top" alt="Foto Berita 4">
                            <div class="berita-card-overlay">
                                <h5 class="card-title">Berita 4: SMKN 2 Padang Raih Penghargaan dari Pemerintah</h5>
                                <p class="card-text">SMKN 2 Padang telah meraih penghargaan dari pemerintah atas
                                    prestasinya dalam bidang pendidikan.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    @endsection

