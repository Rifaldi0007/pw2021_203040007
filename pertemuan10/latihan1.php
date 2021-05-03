<?php
//koneksi DB  pilih database
$conn = mysqli_connect('localhost', 'root', '', 'pw2021_203040007');

//query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
//var_dump($result);

//ubah data kedalam array
//$row = mysqli_fetch_row($result); array numerik
//$row = mysqli_fetch_assoc($result); array assosiative
//$row = mysqli_fetch_array($result); keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result) ) {
    $rows[] = $row;
}

//tampung ke variable mahasiswa
$mahasiswa = $rows;

 ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h3>Mahasiswa</h3>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>gambar</th>
            <th>nama</th>
            <th>nrp</th>
            <th>jurusan</th>
            <th>email</th>
            <th>aksi</th>
        </tr>

        <?php $i= 1;
        foreach($mahasiswa as $m) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><img src="img/<?= $m['gambar']; ?> " width="60"></td>
            <td><?= $m['nama']; ?></td>
            <td><?= $m['nrp']; ?></td>
            <td><?= $m['jurusan']; ?></td>
            <td><?= $m['email']; ?></td>
            <td>
                <a href="">Ubah</a> || <a href="">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>