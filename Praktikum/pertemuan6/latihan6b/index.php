<?php
require 'php/functions.php';
$Anime = query("SELECT * FROM anime")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/mantap.css">
    <title>Anime</title>
</head>

<body>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <div class="container">
        <h1 class="centered white-text">Anime</h1>

        <a href="php/login.php" class="waves-effect waves-light blue btn-small">Login Halaman Admin</a>

        <table class="centered highlight - white-text grey darken-3">
            <tr class="z-depth-5 red darken-3 white-text">
                <th>No</th>
                <th style="text-align: center;">Nama</th>
                <th style="text-align: center;">Deskripsi</th>
                <th style="text-align: center;">Detail Spek</th>
                <th style="text-align: center;">Harga</th>
                <th style="text-align: center;">Stok Anime</th>
                <th style="text-align: center;">Foto Anime</th>
                <th style="text-align: center;">Detail</th>
            </tr>
            <?php $i = 1?>
            <?php foreach ($Anime as $nime): ?>
            <tr>
                <td><?=$i?></td>
                <td><?=$nime["nama"];?></td>
                <td><?=$nime["deskripsi"];?></td>
                <td><?=$nime["detailspek"];?></td>
                <td><?=$nime["harga"];?></td>
                <td><?=$nime["stok_barang"];?></td>
                <td><img width="100px" src="assets/img/<?=$nime["foto_barang"];?>" alt=""></td>
                <td>
                    <p class="Nama">
                        <a href="php/detaill.php?id=<?=$nime['id'];?>">Lihat Produk</a>
                </td>
            </tr>
            <?php $i++?>
            <?php endforeach;?>
    </div>
</body>

</html>