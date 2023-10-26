<?php
// proses di gabung dan di bagi masing masing aksi
include 'config.php';
$db = new db(); //instansiasi

$aksi = $_GET['aksi'];
if ($aksi == "tambah"){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $usia = $_POST['usia'];
    $db->add_data($nama,$alamat,$usia);
    echo "
    <script>
    alert('Data Berhasil Di Tambah!');
    window.location.href='index.php';
    </script>
    ";
}

?>