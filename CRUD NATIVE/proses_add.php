<?php
// link to file
include("config.php");

// ambil semua data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hape = $_POST['no_hape'];

// buat perintah untuk memasukan datanya
$add = mysqli_query($host,"insert into user values 
(null,
'$nama',
'$email',
'$no_hape')");

// notifikasi
if($add){
    echo"
    <script>
    alert('Data Berhasil Di Tambahkan');
    window.location.href = 'index.php';
    </script>
    ";
}


?>