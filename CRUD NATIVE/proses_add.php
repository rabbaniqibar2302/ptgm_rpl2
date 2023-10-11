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
// yang dimaksud hanya menulis variabel adalah true
if($add){
    echo"
    <script>
    alert('Data Berhasil Di Tambahkan');
    window.location.href = 'index.php';
    </script>
    ";
}else{
    echo"
    <script>
    alert('Data Tidak Berhasil Di Tambahkan');
    window.location.href = 'add.php';
    </script>
    ";
}


?>