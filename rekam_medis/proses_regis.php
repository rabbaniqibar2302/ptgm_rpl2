<?php
include 'config.php';

// ambil variabel
$nama = $_POST['username'];
$pass = $_POST['password'];
$role = $_POST['role'];

// jika role = dokter maka
// masukan ke table user dan table detail_dokter
// di dalam table user (null, $name, $pass, $role)
// di dalam table detail_dokter (null, 1, $name, spesialis)

// jika role = pasien maka
// masukan ke table user dan table detail_pasien
// di dalam table user (null, $name, $pass, $role)
// di dalam table detail_dokter (null, 1, $name, penyakit)

?>