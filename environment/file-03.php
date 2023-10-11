<?php
// Variabel lokal hanya dalam kandang(scope)

function haloDunia(){//scope
    global $nama;//caranya untuk biar bisa main keluar
    $nama = "benyamin";
}//scope

haloDunia();
echo $nama;

?>