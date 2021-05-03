<?php 
/*
Rifaldi
pertemuan 10 - 29 April 2021
Koneksi DB & Insert Data
*/
?> 


<?php

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Daftar mahasiswa</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1 ?>
        <?php foreach ($mahasiswa as $m) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img src="img/<?= $m["gambar"]; ?>"></td>
                <td><?= $m["nama"]; ?></td>
                <td><a href="detail.php?id=<?= $m['id'] ?>">Lihat Detail</span></a></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>


</body>

</html>