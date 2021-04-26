<?php
if (!isset($_GET['id'])) {
    header("Location: ../indeks.php");
    exit;
}
require '../php/functions.php';
$Id = $_GET['id'];
$Anime = query("SELECT * FROM anime WHERE id = $Id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="../css/aio.css">
    <title>Anime</title>
</head>

<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?=$Anime["foto_barang"];?>" alt="">
        </div>
        <div class="keterangan">
            <p><?=$Anime["nama"];?></p>
            <p><?=$Anime["deskripsi"];?></p>
            <p><?=$Anime["detailspek"];?></p>
            <p><?=$Anime["harga"];?></p>
        </div>
        <button class="tombol-kembali"><a href="../index.php">Kembali ke home awal</a></button><br><br>
        <button class="tombol-kembali"><a href="../php/admin.php">Kembali ke halaman utama admin</a></button>
    </div>
</body>

</html>
</body>

</html>