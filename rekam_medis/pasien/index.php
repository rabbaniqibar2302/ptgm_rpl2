<html>
    <head>
        <title>Halaman Pasien</title>
    </head>
    <body>
        <h2>Selamat Datang</h2>
        <h4>Silahkan Isi ya!</h4>
        <a href="../index.php">Back</a>
    <form action="proses.php" method="post">
            <div>
                <label>Nama Pasien</label>
                <input type="text" name="nama_pasien">
            </div>
            <div>
                <label>Penyakit Pasien</label>
                <input type="text" name="penyakit_pasien">
            </div>
            <div>
                <label>Dokter Rujukan</label>
                <input type="text" name="dokter_rujukan">
            </div>
            <div>
                <label>Spesialis</label>
                <input type="text" name="spesialis">
            </div>
            <div>
                <input type="submit" value="Tambah Data">
            </div>
        </form>
    </body>
</html>