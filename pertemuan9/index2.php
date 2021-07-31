<?php
// koneksi ke data base
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari data mahasiswa / query data mahasiswa

//buat cek data terkoneksi atau tidak
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
if ( ! $result) {
    echo mysqli_error($conn);
}
//var_dump($result);

// ambil data (fecth) dari object result
// mysqli_fetch_row() // mengembalikan array numeric
// mysqli_fetch_assoc() // mengembalikan array assosiative
// mysqli_fetch_array() // array mengembalikan keduanya
// mysqli_fetch_object() // menampilkan dengan cara object

// $tampil = mysqli_fetch_assoc($result);
// var_dump($tampil["nama"])

// while ($tampil = mysqli_fetch_assoc($result)) {
//     var_dump($tampil);
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellspacing="" cellpadding="10">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php while( $row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">ubah</a> |
                    <a href="">hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>"></td>
                <td><?= $row["nrp"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>