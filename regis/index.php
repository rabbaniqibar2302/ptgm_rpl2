<html>
    <head>
        <title>Registrasi Sederhana MySQLi</title>
    </head>
    <body>
        <h1>Daftar Akun</h1>
        <?php
        if(isset($_GET['pesan'])){
            $pesan = $_GET['pesan'];
            if($pesan == "input"){
                echo "Data Berhasil di input";
            }else if($pesan == "update"){
                echo "Data Berhasil di update";
            }else if($pesan == "hapus"){
                echo "Data Berhasil di hapus";
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
                <input type="text" name="pass">
            </div>
            <div>
                <input type="submit" value="Sign Up">
            </div>
        </form>
    </body>
</html>