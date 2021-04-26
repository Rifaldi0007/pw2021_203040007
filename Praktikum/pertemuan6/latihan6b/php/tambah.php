<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                        alert('Data Berhasil ditambahkan!');
                        document.location.href = 'admin.php';
                    </script>";
    } else {
        echo "<script>
            alert('Data Gagal ditambahkan!');
            document.location.href = 'admin.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">


</head>

<body>
    <div class="container">
        <div class="add" style="padding-top: 20px;">
            <a href="admin.php"><button class="button alert outline">Batal ? :( </button></a>
        </div>
        <h3>Form Add Product Yukk gasskeun</h3>
        <form action="" method="post">
            <label for="nama">Masukan nama anime</label>
            <input type="text" placeholder="sayang" data-role="input" name="nama" id="nama" require>
            <label for="deskripsi">Masukan deskripsi anime</label>
            <input type="text" placeholder="cinta" data-role="input" name="deskripsi" id="deskripsi" require>
            <label for="detailspek">Masukan detail spek</label>
            <input type="text" placeholder="1780" data-role="input" name="detailspek" id="detailspek" require>
            <label for="stok_barang">Masukan stok barang</label>
            <input type="text" placeholder="1780" data-role="input" name="stok_barang" id="stok_barang" require>
            <label for="harga">Masukan harga anime</label>
            <input type="text" placeholder="haii kamuu lopyou wkwkwk" data-role="input" name="harga" id="harga"
                class="mb-1" title="">
            <label for="foto_barang">Masukan nama file gambar anime</label>
            <input type="text" placeholder="sayang.jpg" data-role="input" name="foto_barang" id="foto_barang"
                require><br>
            <button type="submit" name="tambah" class="button success outline">
                klik ini
            </button>
        </form>
    </div>
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>

</body>

</html>