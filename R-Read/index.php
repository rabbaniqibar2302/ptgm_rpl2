<html>
    <head>
        <title>MENAMPILKAN DATABASE</title>
    </head>
    <body>
        <h1>Menampilkan Database</h1>
        <h3>Data Buku</h3>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Id Katalog</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Penerbit</th>
            </tr>
            <?php
            include 'connect.php';
            $query = mysqli_query($host,"select * from buku");
            while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $data['id_buku']?></td>
                <td><?php echo $data['id_katalog']?></td>
                <td><?php echo $data['judul_buku']?></td>
                <td><?php echo $data['pengarang']?></td>
                <td><?php echo $data['thn_terbit']?></td>
                <td><?php echo $data['penerbit']?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </body>
</html>