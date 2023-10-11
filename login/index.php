<html>

<head>
    <title>Login with DB</title>
</head>

<body>
    <h1>Login Akun</h1>
    <?php
    if (isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];
        if ($pesan == "gagal") {
            ?>
            <script>
                alert("Akun anda tidak terdaftar!")
            </script>
            <?php
            echo "Silahkan daftar di sini<br>";
            echo "<a href='../regis/index.php'>Daftar</a>";
        } 
    }
    ?>
    
    <form action="proses.php" method="post">
        <div>
            <label>Username</label>
            <input type="text" name="user">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="pass">
        </div>
        <div>
            <input type="submit" value="LOG IN">
        </div>
    </form>
</body>

</html>