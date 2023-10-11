<?php

$angka1 = @$_GET['angka1'];
$angka2 = @$_GET['angka2'];
$simbol = @$_GET['simbol'];

if($simbol == "+"){
    $hasil = $angka1 + $angka2;
    echo "{$angka1} {$simbol} {$angka2} = {$hasil}";
}else if($simbol == "-"){
    $hasil = $angka1 - $angka2;
    echo "{$angka1} {$simbol} {$angka2} = {$hasil}";
}else if($simbol == "*"){
    $hasil = $angka1 * $angka2;
    echo "{$angka1} {$simbol} {$angka2} = {$hasil}";
}else if($simbol == "/"){
    $hasil = $angka1 / $angka2;
    echo "{$angka1} {$simbol} {$angka2} = {$hasil}";
}else if($simbol == "%"){
    $hasil = $angka1 % $angka2;
    echo "{$angka1} {$simbol} {$angka2} = {$hasil}";
}

?>