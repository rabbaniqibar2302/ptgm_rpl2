<?php
include 'config.php';
$pasien = mysqli_query($host,"select * from pasien");
$dokter = mysqli_query($host,"select * from dokter");
?>
<html>
    <head>
        <title>Rekam Medis</title>
    </head>
    <body>
        <h1>RS JAKARTA PUSAT 1</h1>
        <a href="pasien/index.php">Akses Pasien</a>
        <a href="dokter/index.php">Akses Dokter</a>
        <h2>Data Pasien</h2>
        <!-- table pasien -->
        <table border="1">
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Password</th>
                <th>Penyakit</th>
            </tr>
            <?php
            $no = 1;
            while($data = mysqli_fetch_array($pasien)){
                echo "
                <tr>
                <td>".$no++."</td>
                <td>$data[nama_pasien]</td>
                <td>$data[password]</td>
                <td>$data[penyakit]</td>
                </tr>
                ";
            }
            ?>
        </table>
        <hr>
        <h2>Dokter yang tersedia</h2>
        <!-- table dokter -->
    </body>
</html>