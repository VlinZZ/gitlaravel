    <!-- Navigasi Menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="assets/logo.png" alt="logo" width="70" height="50">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active m-2" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-2" href="#about-section">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-2" href="#berita-section">Berita</a>
                </li>
                <li class="nav-item">
                    {{-- href="{{ route('login') }}">{{ __('Login') }} --}}
                    <a class="btn m-2 bg-black fw-medium text-light" href="{{ route('login') }}"
                     style="width: auto; padding-left: 30px; padding-right: 30px;">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="bg-body-tertiary">
    <div class="container mt-5 pt-5">
        <div class="card p-4">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/kelompok.jpg" class="img-fluid" alt="Kelompok" width="500">
                </div>
                <div class="col-md-6">
                    <h2 class="mb-3">Hai, Selamat Datang di Website</h2>
                    <p class="text-muted">"Hasil Kerja Kami Bertiga"</p>
                    <p>Di sini Anda dapat menemukan informasi tentang anggota kami dan beberapa berita yang telah kami buat. Anda juga dapat menambah berita di dalam website ini.</p>
                </div>
            </div>
        </div>
    </div>
</div>
