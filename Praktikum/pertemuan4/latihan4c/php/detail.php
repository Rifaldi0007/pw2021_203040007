<?php
    //mengecek apakah ada id yang dikirimkan
    //jika tidak maka akan dikembalikan ke halaman index.phhp
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require '../php/function.php';

    //mengambil id dari url
    $id = $_GET['id'];
    //melakukkan query dengan parameter id yang diambil dari url
    $anime = query("SELECT * FROM anime WHERE id = $id")[0];
?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Daftar Anime</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $anime['foto_barang']; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $anime["nama"]; ?></p>
            <p><?= $anime["deskripsi"]; ?></p>
            <p><?= $anime["detailspek"]; ?></p>
            <p><?= $anime["harga"]; ?></p>
            <p><?= $anime["stok_barang"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">kembali</a></button>
    </div>
</body>

</html>