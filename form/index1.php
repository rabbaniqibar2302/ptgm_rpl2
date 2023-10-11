<html>
    <head>
        <title>Membuat Form</title>
    </head>
    <body>
        <?php

        $nama = @$_POST['nama'];
        $alamat = @$_POST['alamat'];

        // Disini kita keluarkan isi dari lemparan data tersebut
        if ($nama){
            echo "Nama : {$nama}";
        }
        if ($alamat){
            echo "Alamat : {$alamat}";
        }

        ?>
        <form action="" method="post">
            <div>
                <label>Nama</label> <br>
                <input type="text" name="nama" placeholder="masukan nama">
            </div>
            <div>
                <label>Alamat</label> <br>
                <input type="text" name="alamat" placeholder="masukan alamat">
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </body>
</html>