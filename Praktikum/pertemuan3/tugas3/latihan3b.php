<?php
$pemainBola = [
    "Mohammad Salah",
    "Cristiano Ronaldo",
    "Lionel Messi",
    "Zlatan Ibrahimovic",
    "Neymar JR"
];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <tittle>Latihan3b 203040007 </tittle>
</head>
<body>
    <h3>Daftar pemainBola terkenal </h3>
    <ol>
        <?php foreach($pemainBola as $pemain) : ?>
            <li><?= $pemain ?></li>
        <?php endforeach?>    
    </ol>

    <?php
        array_push($pemainBola,"Luca Modric", "Sadio Mane");
        sort($pemainBola); 
    ?>

<h3>Daftar pemainBola terkenal baru </h3>
    <ol>
        <?php foreach($pemainBola as $pemainBaru) : ?>
            <li><?= $pemainBaru ?></li>
        <?php endforeach?>    
    </ol>
</body>
</html>