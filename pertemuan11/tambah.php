<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'latihan3.php';
          </script>";
  } else {
    echo "data gagal ditambah!";
  }
}
?>


<h3>Form Tambah Data mahasiswa</h3>
<form action="" method="POST">
  <div class="container">
    <ul>
      <li>
        <label for="gambar">Gambar </label><br>
        <input type="text" name="gambar" id="gambar" required><br><br>
      </li>
      <li>
        <label for="nama">nama </label><br>
        <input type="text" name="nama" id="nama" required><br><br>
      </li>
      <li>
        <label for="nrp">nrp </label><br>
        <input type="text" name="nrp" id="nrp" required><br><br>
      </li>
      <li>
        <label for="jurusan">jurusan </label><br>
        <input type="text" name="jurusan" id="jurusan" required><br><br>
      </li>
      <li>
        <label for="email">email </label><br>
        <input type="text" name="email" id="email" required><br><br>
      </li>
      <br>
      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit">
        <a href="index.php">Kembali</a>
      </button>
    </ul>
  </div>
</form>