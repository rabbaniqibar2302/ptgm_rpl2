<?php
include("config.php");

// ambil variabel yang ada di form edit
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hape = $_POST['no_hape'];

// perintah untuk merubah database sesuai dengan id
$edit = mysqli_query($host,"update user set nama='$nama', email='$email', no_hape='$no_hape' where id='$id' ");

// notifikasi
// yang dimaksud hanya menulis variabel adalah true
if($edit){
    echo"
    <script>
    alert('Data Berhasil Di Update');
    window.location.href = 'index.php';
    </script>
    ";
}else{
    echo"
    <script>
    alert('Data Tidak Berhasil Di Update');
    window.location.href = 'edit.php';
    </script>
    ";
}
?>