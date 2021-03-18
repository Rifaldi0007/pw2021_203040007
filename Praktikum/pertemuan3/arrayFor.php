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

        for ($i = 0; $i < count($nama); $i++) { //count berguna untuk menentukan jumlah elemen pada array.
                                                //sehingga looping akan berhenti ketika isi array sudah tmpil semua.

            echo "<li>$nama[$i]</li>";

        }
   ?>
</body>

</html>