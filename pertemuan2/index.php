<?php
 /*
 Rifaldi Arisandi
 203040007
 https://github.com/Rifaldi0007/pw2021_203040007
 pertemuan ke 2 - 11 februari 2021
 mengenai sintaks standar dasar php 
 standar output
 echo, print
 print_r
 var_dump

 penulisan sintaks PHP
 1.PHP didalam html
 2.HTML didalam PHP

 variabel dan tipe data
 variabel
 tidak boleh diawali dengan angka,tapi boleh mengandung angka
 $nama = "Akang faldi";
 echo 'halo, nama saya $nama';

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo,Selamat datang <?php echo $nama;?></h1>
    <p><?php echo "wilujeung sumping kang faldi"; ?></p>
</body>
</html>

 operator
 aritmatika
 + - * / %
 $x =10;
 $y = 20;
 echo $x * $y;

 penggabung string atau concatenation atau concat
 operatornya itu berupa .
 
$nama_depan = "Faldi";
$nama_belakang = "Arisandi";
echo $nama_depan . " " . $nama_belakang;

assigment
=, +=, -=, *=, /=, %=, .=
$x = 1;
$x += 6;
echo $x; atau misalkan
$nama = "faldi";
$nama .= " ";
$nama .= "Arisandi";
echo $nama;

operator perbandingan
<,>,<=,>=,==, !=
*/
//var_dump(1 == "1");
//identitas
//===, !==
//var_dump(1 === "1");

//logika
//&&,||, !
?>
<?php
$x = 30;
var_dump($x <20 || $x %2 == 0);
?>