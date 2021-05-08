

<?php
require 'functions.php';
//jika tidak ada id di url
if (!isset($_GET['id'])) {
    header("location: index.php");
    exit;
}

//ambil id dari url
$id = $_GET['id'];

//query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");


//cek apakah tombol sudah diubah
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
                alert('Data Berhasil diubah!');
                document.location.href = 'index.php';
          </script>";
  } else {
    echo "data gagal diubah";
  }
}
?>


<h3>Form ubah Data mahasiswa</h3>
<form action="" method="POST">
  <div class="container">
  <input type="hidden" name="id" value="<?= $m['id']; ?>">
    <ul>
      <li>
        <label for="gambar">Gambar </label><br>
        <input type="text" name="gambar" id="gambar" required value="<?= $m['gambar']; ?>"><br><br>
      </li>
      <li>
        <label for="nama">nama </label><br>
        <input type="text" name="nama" id="nama" required value="<?= $m['nama']; ?>"><br><br>
      </li>
      <li>
        <label for="nrp">nrp </label><br>
        <input type="text" name="nrp" id="nrp" required value="<?= $m['nrp']; ?>"><br><br>
      </li>
      <li>
        <label for="jurusan">jurusan </label><br>
        <input type="text" name="jurusan" id="jurusan" required value="<?= $m['jurusan']; ?>"><br><br>
      </li>
      <li>
        <label for="email">email </label><br>
        <input type="text" name="email" id="email" required value="<?= $m['email']; ?>"><br><br>
      </li>
      <br>
      <button type="submit" name="ubah">Ubah Data!</button>
      <button type="submit">
        <a href="index.php">Kembali</a>
      </button>
    </ul>
  </div>
</form>