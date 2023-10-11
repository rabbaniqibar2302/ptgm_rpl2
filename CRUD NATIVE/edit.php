<html>
    <head>
        <title>Edit Data</title>
    </head>
    <body>
        <h1>Edit Data</h1>
        <a href="index.php">back</a>
        <form action="proses_edit.php" method="post">
            <?php
            include("config.php");
            $id = $_GET['id'];
            
            // Mencocokan dari id get dengan database
            $cocok = mysqli_query($host,"select * from user where id=$id");

            while($data = mysqli_fetch_array($cocok)){
                $nama = $data['nama'];
                $email = $data['email'];
                $no_hape = $data['no_hape'];
            }
            ?>
            <div>
                <input type="hidden" name="id" value="<?php echo $id?>">
            </div>
            <div>
                <label>Nama</label>
                <input type="text" name="nama" value="<?php echo $nama?>">
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $email?>">
            </div>
            <div>
                <label>No Hape</label>
                <input type="number" name="no_hape" value="<?php echo $no_hape?>">
            </div>
            <div>
                <input type="submit" value="Edit">
            </div>
        </form>
    </body>
</html>