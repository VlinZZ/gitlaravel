<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login/login.css') }}">
</head>
<body>
    <div class="goblok">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="anjay">
                <small><a href="../"><i class="fa fa-arrow-left"> Kembali</i></a></small>
            </div>
            <h1>Login</h1>
            <div class="uwu">
                <i class="fa fa-user"> User</i>
                <input type="text" name="nama" placeholder="Masukan Username" required><br>
                <i class="fa fa-lock"> Password</i>
                <input type="password" name="password" placeholder="Masukan Password" required>
                <input type="submit" value="Login">
                @error('loginError')
                <small style="color:red;">{{ $message }}</small>
                @enderror
                <small>Belum punya account? <a href="register.html">Register</a></small>
            </div>
        </form>
    </div>
</body>
</html>
