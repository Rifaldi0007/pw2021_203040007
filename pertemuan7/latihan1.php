<?php
//Rifaldi Arisandi_203040007
//https://github.com/Rifaldi0007/pw2021_203040007
//Progweb-2021
//Tanggal 12-maret-2021
//Pada pertemuan ke tujuh ini membahas tentang GET & POST
//sebelum ke materi inti pertama membahas tentang  variable scope / lingkup variabel

//$x = 10;

//function tampilX() {
    //$x = 20;
    //global $x;
    //echo $x;
//}
//tampilX();
//echo "<br>";
//echo $x;

//SuperGlobals
//variabel global milik php
//merupakan array asssociative

//var_dump($_GET);
//var_dump($_POST);
//var_dump($_SERVER);
//echo $_SERVER["SERVER_NAME"];

//sekarang kita membahas $_GET
//$_GET["nama"] ="Rifaldi Arisandido";
//$_GET["nrp"] = "203040007";
$mahasiswa = [
	[	
		"nrp" => "203040012",
		"nama" => "Ibnu Rusdianto",
		"email" => "ibnu.rusdianto55@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "team.png"
	],
	[
		"nama" => "Rifaldi", 
		"nrp" => "203040007",
		"email" => "rifaldia513@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "team.png"
	]
];
?>

<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>


</body>
</html>