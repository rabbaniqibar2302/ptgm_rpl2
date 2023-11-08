<?php
include 'config.php';

// ambil semua data dari  form
$nama_p = $_POST['nama_pasien'];
$penyakit = $_POST['penyakit_pasien'];
$dokter = $_POST['dokter_rujukan'];
$spesialis = $_POST['spesialis'];

// perintah untuk masukan datanya
$add_data = mysqli_query($host,"insert into pasien values
(null,'$nama_p','password','$penyakit')");

$add_data .= mysqli_query($host,"insert into dokter values
(null,'$dokter','password','$spesialis')");

// notifikasi
if($add_data){
    echo"
    <script>
    alert('Data Berhasil Ditambah');
    window.location.href = 'index.php';
    </script>
    ";
}else{
    echo"
    <script>
    alert('Data Gagal Ditambah');
    window.location.href = 'add.php';
    </script>
    ";
}


?>