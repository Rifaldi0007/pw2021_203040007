<?php 
// $mahasiswa = [
// ["Ibnu Rusdianto", "203040012", "ibnu.rusdianto55@gmail.com", "Teknik Informatika"],
// ["203040007", "Rifaldi", "rifaldia513@gmail.com", "Teknik Informatika"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
		"gambar" => "aldi.jpg"
	]
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
			<li>
				<img src="img/<?= $mhs["gambar"]; ?>">
			</li>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NRP : <?= $mhs["nrp"]; ?></li>
			<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
			<li>Email : <?= $mhs["email"]; ?></li>
		</ul>
	<?php endforeach; ?>

</body>
</html>