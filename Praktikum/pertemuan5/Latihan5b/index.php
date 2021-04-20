<?php 
require 'php/functions.php';
$Anime = query("SELECT * FROM anime");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anime</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

</head>

<body style="margin: auto 100px;">
    <div class="add">
        <a href="php/admin.php">Ke Halaman Admin</a>
    </div>
    <table class="highlight centered">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Detail Spek</th>
                <th>Harga</th>
                <th>Stok Barang</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($Anime as $nime) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img width="120px" src="../Latihan5b/assets/img/<?= $nime['foto_barang']; ?>" alt=""></td>
                <td>
                    <a href="php/detail.php?id=<?= $nime['id']; ?>">
                        <?= $nime["nama"]; ?>
                    </a>
                </td>
                <td><?= $nime['deskripsi']; ?></td>
                <td><?= $nime['detailspek']; ?></td>
                <td><?= $nime['harga']; ?></td>
                <td><?= $nime['stok_barang']; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>