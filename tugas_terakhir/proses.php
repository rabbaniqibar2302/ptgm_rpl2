<?php

$angka1 = $_GET['angka1'];
$angka2 = $_GET['angka2'];

function tambah($angka1, $angka2){
    $hasil = $angka1+$angka2;
    echo "Hasil dari {$angka1} + {$angka2} = ";
    echo "<br>";
    echo "{$hasil}";
}

tambah($angka1,$angka2)

?>