<?php 
/*
rifaldi arisandi
203040007
pertemuan 10 - 29 April 2021
Function.php 
*/
?> 


<?php
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "pw2021_203040007");

  return $conn;
}

function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, "$sql");

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $gambar = htmlspecialchars($data['gambar']);
  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $email = htmlspecialchars($data['email']);

  $query = "INSERT INTO mahasiswa
                    VALUES
                    ('','$nama','$nrp','$jurusan','$email','$gambar')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function hapus($id) 
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $gambar = htmlspecialchars($data['gambar']);
  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $email = htmlspecialchars($data['email']);

  $query = "UPDATE mahasiswa SET
              gambar = '$gambar',
              nama = '$nama',
              nrp = '$nrp',
              jurusan = '$jurusan',
              email = '$email'
            WHERE id = $id";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM mahasiswa
            WHERE 
            nama LIKE '%$keyword%' OR
            nrp LIKE '%$keyword%' 
          ";

  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  //cek dulu usernme
  if($user = query("SELECT * FROM user WHERE username = '$username'")){
    //cek password
    if(password_verify($password, $user['password'])){
    //set session
    $_SESSION['login'] = true;

    header("Location: index.php");
    exit;
    }
    
  }
    return[
      'error' => true,
      'pesan' => 'username / password salah!'
    ];
}

function registrasi($data)
{
  $conn = koneksi();

  $username = htmlspecialchars(strtolower($data['username']));
  $password1 = mysqli_real_escape_string($conn, $data['password1']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  //jika username / password kosong
  if(empty($username) || empty($password1) || empty($password2)) {
    echo "<script>
            alert('usrname / password tidak boleh kosong');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  //jika username sudah ada
  if(query("SELECT * FROM user WHERE username = '$username'")){
    echo "<script>
            alert('usrname sudah ada');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  //jika konfirmasi pass tidak sesuai
  if($password1 !== $password2){
    echo "<script>
            alert('password tidak sesuai');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  //jika password < 5 digit
  if(strlen($password1) < 5) {
    echo "<script>
            alert('pass terlalu pendek');
            document.location.href = 'registrasi.php';
          </script>";
    return false;
  }

  //jika username & password sudah sesuai
  //enkripsi pass
  $password_baru = password_hash($password1, PASSWORD_DEFAULT);
  //insert ke tabel user
  $query = "INSERT INTO user
              VALUES
              (null, '$username', '$password_baru')
              ";
   mysqli_query($conn, $query) or die(mysqli_error($conn));
   return mysqli_affected_rows($conn);           
}