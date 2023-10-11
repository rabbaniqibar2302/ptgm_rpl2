<?php
// Array : Kumpulan Data
$siswa = [
    "Herjunot", 
    "Lin",
    "Vado" 
];

// Cara panggil satu satu
// echo $siswa[0] . "<br>";
// echo $siswa[1] . "<br>";
// echo $siswa[2] . "<br>";

// Panggil keseluruhan
foreach($siswa as $listsiswa){
    // echo $listsiswa . "<br>";
}

// Array TerIndeks = 0 sampai seterusnya
// Array Asosiatif = bisa custom 

$detail_siswa = [
    'nis' => '42434',
    'nama' => 'Nurdin M Top',
    'kelas' => 'XI RPL 2'
];

// echo "Nis : {$detail_siswa['nis']} <br>";
// echo "Nama : {$detail_siswa['nama']} <br>";
// echo "Kelas : {$detail_siswa['kelas']} <br>";

// Array Multidimensional

$multiverse = [
    [1, 2, 3, 4, 5],
    [6, 7, 8, 9, 2],
    [3, 5, 1, 0, 5],
    [5, 8, 1, 3, 1]
];

$multiverse2 = [
    "nurul azay",
    "lendis koro",
    [1,2,3,4,5],
    [3.4, 10.90],
    true,
    false
];

// Beranda
// Berita
//      Olahraga
//          - Bola
//          - Bulu Tangkis
//      Politik
//      Mancanegara
// Tentang


$menu = [
    ["nama" => "Beranda"],
    ["nama" => "Berita",
    "subMenu" => [[
                "nama" => "Olahraga",
                "subMenu" => ["nama" => "Bola"],
                ["nama" => "Bulu Tangkis"]
                ]],
                ["nama" => "Politik"],
                ["nama" => "Manca Negara"]
    ],
    ["nama" => "Tentang"],
    ["nama" => "Kontak"]
];

// Cara panggilnya menggunakan fungsi rekursif
function tampilkanMenuBertingkat(array $menu){
    echo "<ul>";
    foreach ($menu as $key => $item){
        echo "<li>{$item['nama']}</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);




?>