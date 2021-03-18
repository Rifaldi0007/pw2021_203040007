<?php 

   $mahasiswa = [
            "001" => "Ahmad",
            "002" => "Budi",
            "003" => "Chika",
            "004" => "dhini",
            "005" => "Erwin"]; 
        //untuk memasukkan value, kita harus membuat key yang merepresentasikan valuenya.
        //tanda "=>" dapat diartikan sebagai merujuk
        //"key" => "value"
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <tittle>Array Associative<tittle>
</head>
<body>
    <?php foreach ($mahasiswa as $nrp => $nama) : ?>
        <li><?php echo "$nrp : $nama" ?></li>
    <?php endforeach?>    
</body>

</html>