<?php

$pi = 3.14;
for ($i = 1; $i <= 100; $i++) {
    echo $i . " ";
    if ($i % 3 == 0 && $i % 5 == 0) {
        $luas = $pi * (($i / 3) * ($i / 3));
        echo "Luas Lingkaran dengan jari-jari " . round($i / 3, 2) . " adalah " . round($luas, 2) . " ";
        $keliling = 2 * $pi * ($i / 5);
        echo "Keliling Lingkaran dengan jari-jari " . round($i / 5, 2) . " adalah " . round($keliling, 2) . " ";
        $luaspersegi = ($i / 3) * ($i / 5);
        echo "Luas Persegi dengan panjang " . round($i / 3, 2) . " dan lebar " . round($i / 5, 2) . " adalah " . round($luaspersegi, 2) . "<br>";
    } else if ($i % 3 == 0) {
        $luas = $pi * (($i / 3) * ($i / 3));
        echo "Luas Lingkaran dengan jari-jari " . round($i / 3, 2) . " adalah " . round($luas, 2) . "<br>";
    } else if ($i % 5 == 0) {
        $keliling = 2 * $pi * ($i / 5);
        echo "Keliling Lingkaran dengan jari-jari " . round($i / 5, 2) . " adalah " . round($keliling, 2) . "<br>";
    } else {
        echo "<br>";
    }
}