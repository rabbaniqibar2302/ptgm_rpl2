<html>
<head>
    <title>Latihan OOP</title>
</head>
<body>
    <h2>Data User</h2>
    <h4>crud menggunakan OOP</h4>
    <a href="add.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Usia</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
        include 'config.php';
        $no = 1;
        $db = new db(); //instansiasi
        foreach($db->show_data() as $data){
            echo "
            <tr>
            <td>".$no++."</td>
            <td>$data[nama]</td>
            <td>$data[alamat]</td>
            <td>$data[usia]</td>
            <td><a href=''>Delete</a></td>
            <td><a href=''>Edit</a></td>
            </tr>
            ";
        }
        ?>
    </table>
    
</body>

</html>