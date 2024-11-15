<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2>Admin Menu</h2>
            <ul>
                <li><a href="{{ route('admin.about') }}"><i class="fa fa-info-circle"></i> About</a></li>
                <li><a href="{{ route('admin.berita') }}"><i class="fa fa-newspaper-o"></i> Berita</a></li>
                <li><a href="{{ route('admin.user') }}"><i class="fa fa-user"></i> User</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <div class="main-content">
            @yield('content')
        </div>
    </div>
</body>
</html>
