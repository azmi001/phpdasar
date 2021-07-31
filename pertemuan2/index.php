<?php
    // ini adalh komentar
    /*
    inin komentar multiple baris
    */
    
    // Standar output
    // echo(untuk string), print(untuk variable)
    // print_r(untuk Array)
    // var_dump(untuk melihat isi variable)
    // print_r dan var_dump biasanya untuk debuging

    echo "azmi munif hartono, ";
    print "azmi munif hartono, ";
    print_r("azmi munif hartono, ");
    var_dump("azmi munif hartono, ");
    echo 123;
    echo true;
    echo false;

    // penulisan syntax php
    // 1. php didalam html
    // 2. html didalam php

    // variable dan tipe data
    // variable
    // tidak boleh diawali olhe angka boleh mengandung angka
    $nama = "azmi";
    echo "halo, nama saya $nama";
    // Operator
    // aritmatika
    // + - * / %
    // $x = 10;
    // $y = 20;
    // echo 1 + 1;

    // penggabung string / concatenation /concat
    // .
    // $nama_depan = "azmi";
    // $nama_belakang = "munif";
    // echo $nama_depan . " " . $nama_belakang;

    //assignment
    // operator penugassan
    // =, +=, -=, *=, /=, %=, .=
    // $x = 1;
    // $x -= 5;
    // echo $x;

    // $nama = "azmi";
    // $nama .= " ";
    // $nama .= "munif";
    // echo $nama;

    // perbandingan
    // <, >, <=, >=, ==, !=
    var_dump(1 > 5);
    var_dump(1 < 5);
    var_dump(1 == "1");

    //identitas
    // ===, !==
    var_dump(1 === "1");

    //logika
    // &&, ||, !
    $a = 10;
    $b = 30;
    var_dump($a < 20 && $a % 2 == 0);
    var_dump($b < 20 || $b % 2 == 0);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>selamat datang <?php echo "Azmi"; ?></h1>
    <p><?php echo "ini adalah paragraf"; ?></p>
</body>
    <?php 
        echo "<h1>Ini bagian body</h1>";
        echo $nama;
    ?>
</html>