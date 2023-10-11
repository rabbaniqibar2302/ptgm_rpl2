<?php
// Gerbang Logika

// Gerbang Logika AND
$a = true && true;
$b = true AND false;
$c = false && false;
$d = true || false;

var_dump($a); echo "<br>";
var_dump($b); echo "<br>";
var_dump($c); echo "<br>";
var_dump($d); echo "<br>";

// Tiga query gerbang logika
// dibaca dari kiri
$e = true && true && true;

// negasi
$f = !true;
$g = !(true && !false);

var_dump($f); echo "<br>";
var_dump($g); echo "<br>";




?>