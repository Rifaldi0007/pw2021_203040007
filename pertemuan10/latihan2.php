<?php 
/*
Rifaldi Arisandi
203040007
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
    <title>Mahasiswa</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>#</th>
            <th>gambar</th>
            <th>nama</th>
            <th>nrp</th>
            <th>jurusan</th>
            <th>email</th>
            <th>aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $m) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">ubah</a>
                    <a href="">hapus</a>
                </td>
                <td><img src="img/<?= $m["gambar"]; ?>"></td>
                <td><?= $m["nama"]; ?></td>
                <td><?= $m["nrp"]; ?></td>
                <td><?= $m["jurusan"]; ?></td>
                <td><?= $m["email"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>>


</body>

</html>