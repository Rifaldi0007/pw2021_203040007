<?php 

//Rifaldi Arisandi
//https://github.com/Rifaldi0007/pw2021_203040007
//praktikum pertemuan ke 2 tanggal 10 maret 2021

    function gantiStyle($tulisan, $style1, $style2){
        echo "
            <div style='$style1'> 
                <p  style='$style2'> $tulisan </p>
            </div>
        ";
    }
    
    echo gantiStyle( 
        "Selamat Datang di Praktikum PW", 
        "border: 1px solid; box-shadow: 0px 1px 3px 2px;", 
        "font-family: Arial; font-size:28px; color:#8c782d; font-style:italic; font-weight: bold;"
    );

?>