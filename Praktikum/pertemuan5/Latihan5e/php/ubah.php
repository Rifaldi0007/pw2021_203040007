<?php 
require 'functions.php';
$id = $_GET['id'];
$Anime = query("SELECT * FROM anime WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Diubah!');
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
    <title>ubah</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h3>Form Ubah Data</h3>
    <form action="" method="post">
        <input type="hidden" name="id" id="id" value="<?= $Anime['id']; ?>">
        <ul style="list-style: none;">
            <li>
                <label for="foto_barang" style="margin-right: 8px;">Gambar</label>
                : <input type="text" name="foto_barang" id="foto_barang" require value="<?= $Anime['foto_barang']; ?>"><br><br>
            </li>
            <li>
                <label for="nama" style="margin-right: 16px;">Nama</label>
                : <input type="text" name="nama" id="nama" require value="<?= $Anime['nama']; ?>"><br><br>
            </li>
            <li>
                <label for="deskripsi" style="margin-right: 21px;">Deskripsi</label>
                : <input type="text" name="deskripsi" id="deskripsi" require
                    value="<?= $Anime['deskripsi']; ?>"><br><br>
            </li>
            <li>
                <label for="detailspek" style="margin-right: 9px;">Detail Spek</label>
                : <input type="text" name="detailspek" id="detailspek" require value="<?= $Anime['detailspek']; ?>"><br><br>
            </li>
            <li>
                <label for="harga" style="margin-right: 10px;">Harga</label>
                : <input type="text" name="harga" id="harga" require value="<?= $Anime['harga']; ?>"><br><br>
            </li>
            <li>
                <label for="stok_barang" style="margin-right: 10px;">Stok Barang</label>
                : <input type="text" name="stok_barang" id="stok_barang" require value="<?= $Anime['stok_barang']; ?>"><br><br>
            </li>
            <button type="submit" name="ubah"
                style="border: none; padding: 5px 10px; background-color: teal; color: white; border-radius: 2px; margin: 0 6px 0 65px;">Ubah
                Data</button>
            <button type="submit" style="border: none; padding: 5px 10px; background-color: teal; border-radius: 2px;">
                <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
            </button>
        </ul>
    </form>
</body>

</html>