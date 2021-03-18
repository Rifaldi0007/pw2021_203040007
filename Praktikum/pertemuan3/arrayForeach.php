<?php

   $nama = ["Ahmad", "Budi", "Chika", "Dhini", "Erwin"]; 

?>

<html>
<head>
    <meta charset="UTF-8">
    <tittle>Looping for array<tittle>
</head>
<body>
    <?php

        foreach ($nama as $absen) { //foreach akan otomatis menampilkan semua isi array
            echo "<li>$absen</li>";
            
        }

        
   ?>
</body>

</html>