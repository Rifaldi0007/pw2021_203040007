<?php 
//Rifaldi Arisandi
//https://github.com/Rifaldi0007/pw2021_203040007
//Tanggal 04 maret 2021
//Pertemuan ke 6 membahas tentang Ascosiative array
?>

<?php 
//Array
//membuat array dengan cara lama
//$hari = array("Senin", "Selasa", "Rabu");
//Membuat array dengan cara lama
//$bulan = ["Januari", "Februari", "Maret"];
//membuat array dengan tipe berbeda beda
//$arr = [100, "teks", true];
//menampilkan array
//versi debugging
//var_dump($hari);
//echo "<br>";
//print_r($bulan);
//menampilkan 1 elemen pada array
//echo $arr[0];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan Array</title>
	<style>
		.kotak {
			width: 30px;
			height: 30px;
			background-color: #BADA55;
			text-align: center;
			line-height: 30px;
			margin: 3px;
			float: left;
			transition: 1s;
		}
		.kotak:hover {
			transform: rotate(360deg);
			border-radius: 50%;
		}
		.clear {
			clear: both;
		}
	</style>
</head>
<body>

<?php 
$angka = [
	[1,2,3],
	[4,5,6],
	[7,8,9]
];
?>
<?php foreach( $angka as $a ) : ?> 
	<?php foreach( $a as $b ) : ?>
		<div class="kotak"><?= $b; ?></div>
	<?php endforeach; ?>
	<div class="clear"></div>
<?php endforeach; ?>

</body>
</html>