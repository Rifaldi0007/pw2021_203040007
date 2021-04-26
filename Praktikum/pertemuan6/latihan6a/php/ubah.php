<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';
$id = $_GET['id'];
$Anime = query("SELECT * FROM anime WHERE id = $id")[0];
if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                        alert('Data Berhasil diubah!');
                        document.location.href = 'admin.php';
                    </script>";
    } else {
        echo "<script>
            alert('Data Gagal diubah!');
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
    <title>203040012</title>
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
</head>

<body>
    <div class="container">
        <div class="add" style="padding-top: 20px;">
            <a href="admin.php"><button class="button alert outline">Cancel</button></a>
        </div>
        <h3>Form Edit Product</h3>
        <form action="" method="post">
            <input type="hidden" name="id" id="id" value="<?=$Anime['id']?>">
            <label for="nama">Nama anime</label>
            <input type="text" data-role="input" name="nama" id="nama" value="<?=$Anime['nama']?>" require>
            <label for="deskripsi">Deskripsi anime</label>
            <input type="text" data-role="input" name="deskripsi" id="deskripsi" value="<?=$Anime['deskripsi']?>"
                require>
            <label for="detailspek">Detail spek</label>
            <input type="text" data-role="input" name="detailspek" id="detailspek" value="<?=$Anime['detailspek']?>"
                require>
            <label for="stok_barang">Stok barang</label>
            <input type="text" data-role="input" name="stok_barang" id="stok_barang" value="<?=$Anime['stok_barang']?>"
                require>
            <label for="harga">Harga anime</label>
            <input type="text" data-role="input" name="harga" id="harga" value="<?=$Anime['harga']?>" class="mb-1"
                title="">
            <label for="foto_barang">Nama file gambar anime</label>
            <input type="text" data-role="input" name="foto_barang" id="foto_barang" value="<?=$Anime['foto_barang']?>"
                require>
            <br>
            <button type="submit" name="ubah" class="button success outline">
                Edit Product
            </button>
        </form>
    </div>
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
</body>

</html>