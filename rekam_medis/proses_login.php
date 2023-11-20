<?php
include 'config.php';

// get variabel from form
$nama = $_POST['username'];
$pass = $_POST['password'];

// Perintah / Query
// Query untuk dokter
$dokter = mysqli_query($host,"select * from user where role = 'dokter' AND username = '$nama' ");

// Query untuk pasien
$pasien = mysqli_query($host,"select * from user where role = 'pasien' AND username = '$nama' ");

// Keluarkan datanya pakai porich
foreach($dokter as $data){
    $user = $data['role'];
}
foreach($pasien as $data){
    $user = $data['role'];
}

// Seleksi dan arahkan ke halamnnya 

if($user == "dokter"){
    echo"
    <script>
    window.location.href = 'dokter/index.php';
    </script>
    ";
}elseif($user == "pasien"){
    echo"
    <script>
    window.location.href = 'pasien/index.php';
    </script>
    ";
}else{
    echo"
    <script>
    alert('AKUN NE PIYE!')
    window.location.href = 'index.php';
    </script>
    ";
}

?>