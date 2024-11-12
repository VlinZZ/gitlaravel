<?php
// index.php
?>

<!DOCTYPE html>
<html lang="id">




<head>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/logo.png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>@yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}">

    <!-- Berita CSS -->
    <link rel="stylesheet" href="{{ asset ('css/berita.css') }}">

    <!-- About CSS -->
    <link rel="stylesheet" href="{{ asset ('css/about.css') }}">
</head>


<body>

       <!-- Konten Utama -->
        @include('navbar')
        <hr class="container mt-5 mb-2">
        <!-- Include About dan Berita -->
        @include('about')
        <hr class="container mt-5 mb-2">
        @include('berita')
    </div>
    <!-- Bootstrap 5.3.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+DmZhu9Kq5zY1N4NjZkQ+gxGjkM95" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>

</html>
