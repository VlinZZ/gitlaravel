<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('logout') }}">
            <img src="{{ asset('assets/logo.png') }}" alt="logo" width="70" height="50">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active m-2" href="{{ url('/') }}">
                        <i class="fa fa-home"> Home</i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-2" href="#about-section">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-2" href="#berita-section">Berita</a>
                </li>

                {{-- Tampilkan menu sidebar admin jika sudah login --}}
                @auth
                    <li class="nav-item">
                        <a class="nav-link m-2" href="{{ route('ketua.admin') }}">Side Bar Admin</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="m-2">
                            @csrf
                            <button type="submit" class="btn bg-danger text-light fw-medium"
                                style="padding-left: 30px; padding-right: 30px;">Logout</button>
                        </form>
                    </li>
                @else
                    {{-- Jika belum login, tampilkan tombol login --}}
                    <li class="nav-item">
                        <a class="btn m-2 bg-black fw-medium text-light" href="{{ route('login') }}"
                            style="padding-left: 30px; padding-right: 30px;">Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
