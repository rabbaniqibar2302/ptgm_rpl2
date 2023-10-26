<?php
// proses di gabung dan di bagi masing masing aksi
include 'config.php';
$db = new db(); //instansiasi

$aksi = $_GET['aksi'];
if ($aksi == "tambah"){
    $db->add_data();
    header("Location:index.php");
}

?>