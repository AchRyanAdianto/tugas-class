selesaikan perhitungan ini 7 % 5 + 8 * 4 - 9 / 3 menggunakan function
<?php

    echo "<br>";
    $hasil= modulo(7,5);
    $hasil= tambah($hasil, kali(8,4));
    $hasil1= bagi(9,3);
    $hasil= kurang($hasil,$hasil1);

    // echo "<br>";
    // $hasil= tambah(5, kali(3,7));
    // $hasil= bagi($hasil,4);
    // $hasil= kurang($hasil,9);
    // $hasil= modulo($hasil,8);
    echo $hasil;

function kali($a, $b) {
    echo "perkalian =";
    $c = $a * $b;
    return $c;
}
    echo "<br>";
    echo kali(3,7)/4+5-9%8;


echo "<br>";
function tambah($a, $b) {
    echo "perjumlahan =";
    $c = $a + $b;
    return $c;
}

tambah(67, 35);

echo "<br>";
function kurang($a, $b) {
    echo "belajar kurang =";
    $c = $a - $b;
    return $c;
}

kurang(450, 260);

echo "<br>";
function bagi($a, $b) {
    echo "belajar bagi =";
    $c = $a / $b;
    return $c;
}

bagi(230, 4);

function modulo($a, $b) {
    $c = $a % $b;
    return $c;
}

    modulo(255, 11);
?>