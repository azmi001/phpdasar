<?php
// $mahasiswa = [
//     ["Azmi Munif", "20210012", "Teknologi Permainan", "azmimunifhartono@gmail.com"],
//     ["bintang", "20210055", "Teknologi Permainan", "mbintang@gmail.com"],
//     ["sultan", "20210053", "Teknologi Permainan", "sultan@gmail.com"]
// ];

// Array associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [ 
        "nrp" => "20210012",
        "email" => "azmimunifhartono@gmail.com",
        "jurusan" => "Teknologi Permainan",
        "nama" => "Azmi Munif",
        "gambar" => "panik.png"
    ],
    [
        "nama" => "bintang", 
        "nrp" => "20210055",
        "email" => "bintang@gmail.com",
        "jurusan" => "Teknologi Permainan",
        "gambar" => "sad.png"
    ]
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

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?=$mhs["nama"];?></li>
            <li>Nama : <?=$mhs["nrp"];?></li>
            <li>Nama : <?=$mhs["email"];?></li>
            <li>Nama : <?=$mhs["jurusan"];?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>