<?php
    $hari = ["Senin", "Selasa", "Rabu"];
    $angka = ["2", "4", "5", "9", "0"];
    echo "Array awal : ";
    print_r($hari);
    echo "</hr>";

    echo "Array setelah di pop : ";
    $hasil = array_pop($hari); // Menghapus atau mengambil elemen terakhir dari array
    print_r($hari);
    echo "<br>Elemen yang di pop : $hasil <hr>";

    echo "Array setelah di push : ";
    $hasil = array_push($hari,"Rabu", "Kamis", "Jum'at"); //Menambahkan beberapa elemen pada akhir array
    print_r($hari);
    echo "<hr>";

    echo "array setelah di shift : ";
    $hasil = array_shift($hari); //Menghapus atau mengambil elemen pertama dari array
    print_r($hari);
    echo "Elemen yang di shift : $hasil <hr>";

    echo "array setelah di Unshift : ";
    $hasil = array_unshift($hari, "elemen", "Ditambahkan"); //Menambahkan satu atau lebih elemen array di awal
    print_r($hari) echo "<hr>";
    
    echo "Mengurutkan array secara menaik : ";
    $hasil = rsort($angka);
    print_r($angka) echo "<hr>";
 
    echo "Mengurutkan array secara menurun : ";
    $hasil = sort($angka);
    print_r($angka);

?>