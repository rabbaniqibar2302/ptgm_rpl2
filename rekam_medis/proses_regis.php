<?php
include 'config.php';

// ambil variabel
$name = $_POST['username'];
$pass = $_POST['password'];
$role = $_POST['role'];

// jika role = dokter maka
// masukan ke table user dan table detail_dokter
// di dalam table user (null, $name, $pass, $role)
// di dalam table detail_dokter (null, 1, $name, spesialis)
if($role == "dokter"){
    $data_1 = mysqli_query($host,"insert into user values(
        null,'$name','$pass','$role')");

        // cari id user 
        if($data_1){
            $last = mysqli_insert_id($host);
        }

    $data_2 = mysqli_query($host,"insert into detail_dokter values(
        null, '$last', '$name', 'spesialis')");
    if($data_1 AND $data_2){
        echo "
        <script>
        alert('Data Akun Dokter Berhasil Di Tambah');
        window.location.href='index.php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert('Data Akun Dokter Gagal Di Tambah');
        // window.location.href='regis.php';
        </script>
        ";
    }
}else if($roll = "pasien"){
    $data_1 = mysqli_query($host,"insert into user values(
        null, '$name', '$pass', '$role'
    )");

    // cari id user 
    if($data_1){
        $last = mysqli_insert_id($host);
    }
    // cari id user 

    $data_2 = mysqli_query($host,"insert into detail_pasien values(
        null, '$last', '$name', 'penyakit'
    )");
    if($data_1 AND $data_2){
        echo "
        <script>
        alert('Data Akun Pasien Berhasil Di Tambah');
        window.location.href='index.php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert('Data Akun Pasien Gagal Di Tambah');
        window.location.href='regis.php';
        </script>
        ";
    }
}

// jika role = pasien maka
// masukan ke table user dan table detail_pasien
// di dalam table user (null, $name, $pass, $role)
// di dalam table detail_dokter (null, 1, $name, penyakit)

?>