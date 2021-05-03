<?php 
/*
Rifaldi arisandi
203040007
pertemuan 10 - 29 April 2021
Detail.php 
*/
?> 


<?php

require 'functions.php';

$id = $_GET['id'];
$m = query("SELECT * FROM mahasiswa WHERE id = $id");

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
    <ul>
        <li><img src="img/<?= $m["gambar"]; ?>"></li>
        <li><?= $m["nama"]; ?></li>
        <li><?= $m["nrp"]; ?></li>
        <li><?= $m["jurusan"]; ?></li>
        <li><?= $m["email"]; ?></li>
        <li><a href="">ubah</a> || <a href="">hapus</a>
        <li><a href="latihan3.php">Kembali!!</a></li>
        </li>
    </ul>
</body>

</html>