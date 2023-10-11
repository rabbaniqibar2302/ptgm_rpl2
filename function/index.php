<?php

function garis(){
    echo "<br>";
    echo "========================";
    echo "<br>";
}

// mendefinisikan fungsi
function kelas_keren(){
    // disini tugas yang akan dilaksanakan
    echo "XII RPL 2";
    echo "Mr Adit Class";
}


// Function 1 paramater
function halo_teman($nama){
    echo "Halo nama saya {$nama}";
}

// Function lebih dari 1 parameter
function cek_sehat($name,$jumlah_kunjungan)
{
    echo "Hai {$name} selamat datang di WC";
    echo "<br>";
    echo "Terima Kasih telah berkunjung";
    echo "<br>";
    
    if($jumlah_kunjungan > 5){
        echo "<br>";
        echo "Anda Sedang Sakit!, Silahkan Pulang!";
    }
}

// cara panggilnya
kelas_keren();
garis();
halo_teman("qibar");
garis();
halo_teman("shouqi");
garis();

cek_sehat("Qibar",6)


?>