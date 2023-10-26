<?php
class db{
    var $config;
    var $host = "localhost";
    var $name = "root";
    var $pass = null;
    var $db = "latihan_oop";
    function __construct()
    {
        $this->config = mysqli_connect(
            $this->host,$this->name,$this->pass,$this->db
        );
    }

    function show_data(){
        $data = mysqli_query($this->config,"select * from user");
        // menampilkan data dari table user
        while ($table = mysqli_fetch_array($data)){
            $hasil[] = $table;
        }
        return $hasil;
    }

    function add_data($nama,$alamat,$usia){
        mysqli_query($this->config,"insert into user values
        (null,
        '$nama',
        '$alamat',
        '$usia')");
    }

}
