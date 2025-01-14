<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/login/login.css') }}">
</head>
<body>
    <div class="goblok">
        <form action="{{ route('register.process') }}" method="POST">
            @csrf
            <div class="anjay">
                <small><a href="{{ route('login') }}"><i class="fa fa-arrow-left"> Kembali</i></a></small>
            </div>
            <h1>Register</h1>
            <div class="uwu">
                <i class="fa fa-user"> Nama</i>
                <input type="text" name="nama" placeholder="Masukan Nama" value="{{ old('nama') }}" required><br>
                @error('nama')
                <small style="color:red;">{{ $message }}</small>
                @enderror

                <i class="fa fa-envelope"> Email</i>
                <input type="email" name="email" placeholder="Masukan Email" value="{{ old('email') }}" required><br>
                @error('email')
                <small style="color:red;">{{ $message }}</small>
                @enderror

                <i class="fa fa-lock"> Password</i>
                <input type="password" name="password" placeholder="Masukan Password" required><br>
                @error('password')
                <small style="color:red;">{{ $message }}</small>
                @enderror

                <i class="fa fa-lock"> Konfirmasi Password</i>
                <input type="password" name="password_confirmation" placeholder="Ulangi Password" required><br>

                <input type="submit" value="Register">
            </div>
        </form>
    </div>
</body>
</html>
