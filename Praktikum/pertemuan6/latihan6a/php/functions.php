<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040007");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data)
{
    $conn = koneksi();

    $nama_anime = htmlspecialchars($data['nama']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $detailspek = htmlspecialchars($data['detailspek']);
    $stok_barang = htmlspecialchars($data['stok_barang']);
    $harga = htmlspecialchars($data['harga']);
    $Gambar = htmlspecialchars($data['foto_barang']);

    $query = "INSERT INTO anime
                            VALUES
                            ('', '$nama_anime', '$deskripsi', '$detailspek', $stok_barang, '$harga','$Gambar')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM anime WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();
    $id = ($data['id']);
    $nama_anime = htmlspecialchars($data['nama']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $detailspek = htmlspecialchars($data['detailspek']);
    $stok_barang = htmlspecialchars($data['stok_barang']);
    $harga = htmlspecialchars($data['harga']);
    $Gambar = htmlspecialchars($data['foto_barang']);

    $query = "UPDATE anime SET
    nama = '$nama_anime',
    deskripsi = '$deskripsi',
    detailspek = '$detailspek',
    stok_barang = '$stok_barang',
    harga = '$harga',
    foto_barang = '$Gambar'
    WHERE id = $id
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM movie
    WHERE
    nama LIKE '%$keyword%' OR
    deskripsi LIKE '%$keyword%' OR
    detailspek LIKE '%$keyword%' OR
    harga LIKE '%$keyword%' OR
    foto_barang LIKE '%$keyword%'
    ";
    return query($query);
}
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('Username sudah di gunakan');
        </script>";
        return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    $query_tambah = "INSERT INTO user VALUES ('','$username','$password')";
    mysqli_query($conn, $query_tambah);
    return mysqli_affected_rows($conn);
}