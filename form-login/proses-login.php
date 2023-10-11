<?php
// @ memastikan nilai nya ada , jika tidak ada atau error maka menjadi null

// request untuk memanggil data yang dikirim menggunakan metode get atau post
$email = @$_REQUEST['email'];
$password = @$_REQUEST['password'];

if ($email !== "fulan@gmail.com"){
    die("Email anda tidak terdaftar");
}

if ($password !== "kepsekgantengpoenya"){
    die("Password anda Salah"); 
}

// jika lolos alias email dan passwordnya benar
echo "Selamat {$email}, Anda berhasil Login!";

// tag php tidak perlu ditutup karena ia tidak bercampur dengan bahasa lainnya
?>