<?php
// SUPERGLOBALS
// variable global milip PHP
// merupakan Array Associative
//var_dump($_SERVER);

// $_GET
// $_GET["nama"] = "Azmi Munif";
// $_GET["nim"] = "20210012";

//var_dump($_GET);

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
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <li>
            <a href="latihan3.php?nama=<?=$mhs["nama"];?>&nrp=<?=$mhs["nrp"];?>&email=<?=$mhs["email"];?>&jurusan=<?=$mhs["jurusan"];?>&gambar=<?=$mhs["gambar"];?>"><?=$mhs["nama"];?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>