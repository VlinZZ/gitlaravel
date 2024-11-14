<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farel Yuhandriza Putra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-mQ93Kz2Zn8sR0CAx2s5A/BB8zS3I/hz9pHmhmA2GTV8MWRnx1B90i3PkiRH9Czc4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/aboutadmin/rell.css') }}">
</head>

<body>
    <style>
        body,
        a:hover {
            cursor: url(http://cur.cursors-4u.net/cursors/cur-9/cur862.ani), url(http://cur.cursors-4u.net/cursors/cur-9/cur862.png), progress !important;
        }
    </style>
    <script type="text/javascript" src="https://drvee07.github.io/loc/rev.js"></script>
    <?php
    // Data user dinamis
    $userProfile = [
        'NAMA' => 'Farel Yuhandriza Putra',
        'GMAIL' => 'rellultra@gmail.com',
        'NOMOR HP' => '+6289618029981',
        'ALAMAT' => 'Komp emilindo Blok D12',
        'TGL LAHIR' => '07-juni-2007',
        'KEAHLIAN' => 'Software Engineer',
        'ANGGOTA' => '2',
        'BIO PROFIL' => 'Halo Nama Saya Farel Yuhandriza Putra Biasanya Di Panggil Farel, umur saya 17 Tahun Saya bersekolah di smkn2 padang, Salam kenal Sayonara <3',
        'image' => '../assets/farel.jpg', // URL gambar profil
    ];
    ?>
    <div class="container m-4">
        <a href="{{ url('/') }}" style="font-size:25px; font-family: Cambria, Times New Roman, serif;">
            <button class="responsive-button">Back To About</button>
        </a>
        <h1 style="bottom : 10px"></h1>
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo $userProfile['image']; ?>" alt="Profile Picture" class="img-fluid circle" width="270px"
                    height="200px">
            </div>
            <div class="col-md-8">
                <h1 style="color:white;"><?php echo $userProfile['NAMA']; ?></h1>
                <p class="text-muted"><?php echo $userProfile['KEAHLIAN']; ?></p>
                <div class="table-container">
                    <table style="background-color:white; rorder-radius:20px;">
                        <tbody>
                            <tr>
                                <td>Anggota</td>
                                <td><?php echo $userProfile['ANGGOTA']; ?></td>
                            </tr>
                            <tr>
                                <td>Email User</td>
                                <td><?php echo $userProfile['GMAIL']; ?></td>
                            </tr>
                            <tr>
                                <td>Nomor HP</td>
                                <td><?php echo $userProfile['NOMOR HP']; ?></td>
                            </tr>
                            <tr>
                                <td>Tempat Tinggal</td>
                                <td><?php echo $userProfile['ALAMAT']; ?></td>
                            </tr>
                            <tr>
                                <td>Umur</td>
                                <td><?php echo $userProfile['TGL LAHIR']; ?></td>
                            </tr>
                            <tr>
                                <td>Bio Profil</td>
                                <td><?php echo $userProfile['BIO PROFIL']; ?></td>
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
</body>

</html>
