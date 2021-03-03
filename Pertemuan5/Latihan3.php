<?php 
$mahasiswa = [
	["Ibnu Rusdianto", "203040012", "Teknik Informatika", "ibnu.rusdianto55@gmail.com"],
	["Rifaldi Arisando", "203040007", "Teknik Mesin", "rifaldia513@gmail.com"],
	["203040016", "Tomi", "Teknik Planologi", "tomi_k@gmail.com"]
];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
	<li>Nama : <?= $mhs[0]; ?></li>
	<li>NRP : <?= $mhs[1]; ?></li>
	<li>Jurusan : <?= $mhs[2]; ?></li>
	<li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>





</body>
</html>