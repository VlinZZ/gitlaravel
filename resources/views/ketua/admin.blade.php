
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/aboutadmin/admin.css') }}">
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <a href="{{ url('/') }}">
                <img src="{{ asset('assets/logo.png') }}" alt="Logo" /></a>
                <h3>Admin Panel</h3>
            </div>
            <ul class="menu">
                <li><a href="{{ url('/CRUD') }}" class="menu-item"><i class="fa fa-newspaper-o"></i> Dashboard</a></li>
                <li><a href="{{ url('/abouts') }}" class="menu-item"><i class="fa fa-info-circle"></i> About</a></li>
                <li><a href="{{ url('/beritas') }}" class="menu-item"><i class="fa fa-newspaper-o"></i> Berita</a></li>
                <li><a href="{{ url('/user') }}" class="menu-item"><i class="fa fa-user"></i> User</a></li>
                <body class="hold-transition sidebar-mini">
                    <div class="wrapper">
                        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                            <!-- Left navbar links -->
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                            class="fas fa-bars"></i></a>
                                <li class="nav-item d-none d-sm-inline-block">
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn  text-light  " >Logout</button>
                                    </form>

                                </li>
                            </ul>
                        </nav>

            </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            @yield('content')
        </main>
    </div>
</body>
</html>
