<html>
    <head>
        <title>Halaman Dokter</title>
    </head>
    <body>
        <h1>Data Dokter</h1>
        <h3>Tambah Data</h3>
        <a href="../index.php">Back</a>
        <form action="proses.php" method="post">
            <div>
                <label>Nama</label>
                <input type="text" name="nama">
            </div>
            <div>
                <label>Spesialis</label>
                <select name="spesialis">
                    <?php
                    include '../config.php';
                    $table = mysqli_query($host,"select * from spesialis");
                    while($data = mysqli_fetch_array($table)){
                        echo"
                        <option value = '$data[nama_spesialis]'>
                        $data[nama_spesialis]
                        </option>
                        ";
                    }
                    ?>
                </select>
            </div>  
        </form>
    </body>
</html>