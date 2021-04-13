<?php 
    // koneksi ke database 
    //$koneksi = mysqli_connect("localhost", "root","");
    //mysqli_select_db($koneksi, "pw_tubes_203040007");
    //untuk ambil query dari database 
    //$result = mysqli_query($koneksi, "SELECT * FROM anime");

    //menghubungkan dengan file php lainnya
    require 'php/function.php';
    //melakukan query
    $anime = query("SELECT * FROM anime")
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Daftar Anime</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>
    <body>
        <div class="container">
            <table cellpadding="10" cellspacing="0" border="1" class="striped">
                <tr>
                    <th>No</th>
                    <th>nama</th>
                    <th>deskripsi</th>
                    <th>detailspek</th>
                    <th>harga</th>
                    <th>stok_barang</th>
                    <th>foto_barang</th>
                </tr>
                <?php $i = 1 ?>
                <?php foreach ($anime as $anm ) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $anm["nama"] ?></td>
                    <td><?= $anm["deskripsi"] ?></td>
                    <td><?= $anm["detailspek"] ?></td>
                    <td><?= $anm["harga"] ?></td>
                    <td><?= $anm["stok_barang"] ?></td>
                    <td><img src="assets/img/<?= $anm["foto_barang"]; ?>"></td>
                </tr>
                <?php $i++ ?>
                <?php endforeach; ?>
                
            </table>
        </div>
    </body>
</html>