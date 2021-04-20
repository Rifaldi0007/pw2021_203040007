<?php 
require 'php/functions.php';
$Anime = query("SELECT * FROM anime");

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $Anime = query("SELECT * FROM anime WHERE
            `nama` LIKE '%$keyword%' OR
            `deskripsi` LIKE '%$keyword%' OR
            `detailspek` LIKE '%$keyword%' OR
            `stok_barang` LIKE '%$keyword%' OR
            `harga` LIKE '%$keyword%' ");
} else {
    $Anime = query("SELECT * FROM anime");
}
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

    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari"
            style="border: none; padding: 5px 10px; background-color: teal; color: white; border-radius: 2px;">Cari!</button>
    </form>

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
            <?php if (empty($Anime)) : ?>
            <tr>
                <td colspan="8">
                    <h1>Anime Tidak Ditemukan</h1>
                </td>
            </tr>
            <?php else : ?>
            <?php $i = 1; ?>
            <?php foreach ($Anime as $nime) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img width="220px" src="../Latihan5e/assets/img/<?= $nime['foto_barang']; ?>" alt=""></td>
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
            <?php endif; ?>
        </tbody>
    </table>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>