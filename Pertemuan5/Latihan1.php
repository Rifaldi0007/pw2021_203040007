<?php
//Rifaldi Arisandi
//203040007
//https://github.com/Rifaldi0007/pw2021_203040007
//pertemuan kelimma tanggal 04 maret 2021
//Materi tentang Array
?>

<?php 
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Kamis", "Jumat", "Sabtu");
// cara baru
$bulan = ["Juni", "Juli", "Agustus"];
$arr1 = [123, "tulisan", false];

// Menampilkan Array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1]

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Minggu";
$hari[] = "Senin";
echo "<br>";
var_dump($hari);
?>