<!DOCTYPE html>
<head>
    <title>Halaman Registrasi</title>
</head>
<body>
    <h1>Daftar Akun</h1>
    <h3>Aplikasi Rekam Medis</h3>
    <form action="proses_regis.php" method="post">
        <div>
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div>
            <label>Password</label>
            <input type="text" name="password">
        </div>
        <div>
            <label>Sebagai : </label>
            <select name="role">
                <option value="pasien">pasien</option>
                <option value="dokter">dokter</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Daftar">
        </div>
    </form>
</body>
</html>