<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';
$Anime = query("SELECT * FROM anime");
if (isset($_GET["cari"])) {
    $Anime = cari($_GET["keyword"]);
}
if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $Anime = query(
        "SELECT * FROM anime WHERE
        nama LIKE '%$keyword%' OR
        deskripsi LIKE '%$keyword%' OR
        detailspek LIKE '%$keyword%' OR
        stok_barang LIKE '%$keyword%'
        "
    );
} else {
    $Anime = query("SELECT * FROM anime");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="../css/mantap.css">
    <title>Anime</title>
</head>

<body>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <div class="container">
        <h1 class="centered white-text">Anime</h1>
        <div class="add">
            <a href="tambah.php" class="waves-effect waves-light teal btn-small">Tambah Data</a>
            <form action="" method="GET">
                <input class="white-text" type="text" name="keyword" autofocus placeholder="masukkan keyword.."
                    autocomplete="off">
                <button class="waves-effect waves-light teal btn-small" type="submit" name="cari">Search</button>
            </form>
        </div>
        <table class="centered highlight - white-text grey darken-3">
            <tr class="z-depth-5 pink darken-3 white-text">
                <th style="text-align: center;">No</th>
                <th style="text-align: center;">Nama</th>
                <th style="text-align: center;">Deskripsi</th>
                <th style="text-align: center;">Detail Spek</th>
                <th style="text-align: center;">Harga</th>
                <th style="text-align: center;">Stok Anime</th>
                <th style="text-align: center;">Foto Anime</th>
                <th style="text-align: center;">Detail</th>
                <th style="text-align: center;">Opsi</th>
            </tr>
            <?php if (empty($Anime)): ?>
            <tr>
                <td colspan="7">
                    <h1>Data tidak ditemukan</h1>
                </td>
            </tr>
            <?php else: ?>
            <?php $i = 1?>
            <?php foreach ($Anime as $nime): ?>
            <tr>
                <td><?=$i?></td>
                <td><?=$nime["nama"];?></td>
                <td><?=$nime["deskripsi"];?></td>
                <td><?=$nime["detailspek"];?></td>
                <td><?=$nime["stok_barang"];?></td>
                <td><?=$nime["harga"];?></td>
                <td><img width="100px" src="../assets/img/<?=$nime["foto_barang"];?>" alt=""></td>
                <td>
                    <p class="Nama">
                        <a href="../php/detaill.php?id=<?=$nime['id'];?>">Lihat Produk</a>
                </td>
                <td>
                    <a href="ubah.php?id=<?=$nime['id']?>" class="waves-effect waves-light teal btn-small">Ubah</a>
                    <a href="hapus.php?id=<?=$nime['id']?>"
                        class="waves-effect waves-light pink darken-3 btn-small">Hapus</a>
                </td>
            </tr>
            <?php $i++?>
            <?php endforeach;?>
            <?php endif;?>
            <div class="logout">
                <a href="logout.php" class="waves-effect waves-light pink btn-small">Logout</a>
            </div>
    </div>
</body>

</html>