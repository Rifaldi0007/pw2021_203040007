<?php 
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040007");

    return $conn;
}
function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data) {
    $conn = koneksi();
    $nama = htmlspecialchars($data['nama']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $detailspek = htmlspecialchars($data['detailspek']);
    $harga = htmlspecialchars($data['harga']);
    $stok_barang = htmlspecialchars($data['stok_barang']);
    $gambar = htmlspecialchars($data['foto_barang']);
    $query = "INSERT INTO anime
                VALUES
                ('', '$nama', '$deskripsi', '$detailspek', '$harga', '$stok_barang', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM anime WHERE id = $id");

    return mysqli_affected_rows($conn);
}
function ubah($data) {
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $nama = htmlspecialchars($data['nama']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $detailspek = htmlspecialchars($data['detailspek']);
    $harga = htmlspecialchars($data['harga']);
    $stok_barang = htmlspecialchars($data['stok_barang']);
    $gambar = htmlspecialchars($data['foto_barang']);
    $query = "UPDATE `anime` SET `nama`='$nama',`deskripsi`='$deskripsi',`detailspek`='$detailspek',`harga`='$harga',`stok_barang`='$stok_barang', `foto_barang`='$gambar' WHERE id = $id
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>