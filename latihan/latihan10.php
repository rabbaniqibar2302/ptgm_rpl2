<?php
// Variabel global adalah variabel yang sudah di sediakan oleh PHP, sesuai FUNGSI nya

$_SERVER;
// berguna untuk menampilkan informasi request dengan bentuk array aso

$_GET;
// passing data ke URL Visible

$_POST;
// passing data ke URL Invisible

$_SESSION;
// menyimpan data user pada suatu proses (defaultnya 24 Menit)

$_COOKIE;
// menyimpan data berkaitan dengan user : login, cart toko online dan lain lain

$_REQUEST;
// array asosiatif yang menyimpan nilai gabungan dari $_GET , $_POST, $_COOKIE

$_FILES;
// berguna untuk menyimpan data file yang diunggah dalam satu request dengan metode POST dan PUT

$_ENV;
// konfigurasi database

$_GLOBALS;
// menyimpan semua variabel global yang didefinisiknan saat program berjalan

?>