<?php
include("config.php");

// ambil variabel yang ada di form edit
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hape = $_POST['no_hape'];

// perintah untuk merubah database sesuai dengan id
mysqli_query($host,"update user set nama='$nama', email='$email', no_hape='$no_hape' where id='$id' ");

?>