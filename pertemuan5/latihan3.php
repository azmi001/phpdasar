<?php
$mahasiswa = [
    ["Azmi Munif", "20210012", "Teknologi Permainan", "azmimunifhartono@gmail.com"],
    ["bintang", "20210055", "Teknologi Permainan", "mbintang@gmail.com"],
    ["sultan", "20210053", "Teknologi Permainan", "sultan@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <br>
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama :<?= $mhs[0]; ?></li>
        <li>NIM :<?= $mhs[1]; ?></li>
        <li>Jurusan :<?= $mhs[2]; ?></li>
        <li>Email :<?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>