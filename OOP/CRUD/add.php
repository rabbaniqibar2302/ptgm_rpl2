<html>
    <head>
        <title>Tambah Data | CRUD OOP</title>
    </head>
    <body>
        <h2>Tambah Data</h2>
        <a href="index.php">back</a>
        <form action="proses.php?aksi=tambah" method="post">
            <div>
                <label>Nama</label>
                <input type="text" name="nama">
            </div>
            <div>
                <label>Alamat</label>
                <input type="text" name="alamat">
            </div>
            <div>
                <label>Usia</label>
                <input type="number" name="usia">
            </div>
            <div>
                <input type="submit" value="Tambah Data">
            </div>
        </form>
    </body>
</html>