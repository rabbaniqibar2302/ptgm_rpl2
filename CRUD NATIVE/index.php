<html>

<head>
    <title>Belajar CRUD</title>
</head>

<body>
    <h1>Belajar CRUD</h1>
    <a href="add.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>No Hape</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
        include("config.php");
        $tampil = mysqli_query($host, "select * from user");
        $i = 1;
        while ($data = mysqli_fetch_array($tampil)) {
            echo "<tr>";
            echo "<td>" . $i++ . "</td>";
            echo "<td>" . $data['nama'] . "</td>";
            echo "<td>" . $data['email'] . "</td>";
            echo "<td>" . $data['no_hape'] . "</td>";
            echo "<td>" . "<a href='edit.php?id=$data[id]'>edit</a>" . "</td>";
            echo "<td>" . "<a href='delete.php?id=$data[id]'>hapus</a>" . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>