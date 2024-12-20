    <!-- Navigasi Menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src= "{{ asset ('assets/logo.png')}}" alt="logo" width="70" height="50">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active m-2" aria-current="page" href="{{ url('/')}}"><i class="fa fa-home" aria-hidden="true">  Home</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-2" href="#about-section">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-2" href="#berita-section">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-2" href="{{ route('ketua.admin') }}">side bar</a>
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


