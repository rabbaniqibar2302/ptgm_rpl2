<html>

<head>
    <title>Registrasi Sederhana</title>
</head>

<body>
    <form method="post" action="proses-regis.php">
        <div>
            <label>Nama</label><br>
            <input type="text" name="nama">
        </div>
        <div>
            <label>Email</label><br>
            <input type="text" name="email">
        </div>
        <div>
            <label>Usia</label><br>
            <input type="number" name="usia">
        </div>
        <div>
            <label>Tanggal Lahir</label><br>
            <input type="date" name="tgl_lhr">
        </div>
        <div>
            <label>Alamat</label><br>
            <textarea name="alamat"></textarea>
        </div>
        <div style="margin-bottom: 1rem">
            <label>Jenis Kelamin</label><br>
            <input type="radio" name="j_k" value="1">Laki Laki<br>
            <input type="radio" name="j_k" value="2">Perempuan
        </div>
        <div style="margin-bottom: 1rem">
            <label>Status</label><br>
            <select name="status">
                <option value="lajang">Lajang</option>
                <option value="menikah">Menikah</option>
            </select>
        </div>
        <div style="margin-bottom: 1rem">
            <label>Hobi</label>
            <input type="checkbox" name="hobi[]" value="berenang">Berenang<br>
            <input type="checkbox" name="hobi[]" value="sepakbola">Sepak Bola<br>
            <input type="checkbox" name="hobi[]" value="bulutangkis">Bulu Tangkis<br>
            <input type="checkbox" name="hobi[]" value="tidur">Tidur<br>
        </div>
        <div>
            <button>Submit</button>
        </div>
    </form>
</body>

</html>