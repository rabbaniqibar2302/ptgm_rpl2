<?php

include 'connect.php';

$user = $_POST['user'];
$pass = $_POST['pass'];

$query = mysqli_query($host,"insert into user values('','$user','$pass')");

// fungsi header : mengarahkan ke halaman tertentu
header("location:index.php?pesan=input")    

?>