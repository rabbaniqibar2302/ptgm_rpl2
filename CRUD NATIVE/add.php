<html>

<head>
    <title>Tambah Data</title>
</head>

<body>
    <h1>Tambah Data</h1>
    <a href="index.php">back</a>
    <form action="proses_add.php" method="post">
        <div>
            <label>Nama</label>
            <input type="text" name="nama">
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label>No Hape</label>
            <input type="number" name="no_hape">
        </div>
        <div>
            <input type="submit" value="Tambah">
        </div>
    </form>
</body>

</html>