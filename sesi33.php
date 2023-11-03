<?php

//Nomor 4

for ($x = 1; $x <= 10; $x++) {
  $hasil = 1 * $x;
  echo 1 . " x $x = " . $hasil . "<br>";
}

// Nomor 1

echo "<br>";
$array = array("satu", "dua", "tiga", "empat", "lima");

// Menggunakan looping for
$length = count($array);
for ($a = $length - 1; $a >= 0; $a--) {
    echo $array[$a] . "<br>";
    if ($a > 0) {
    }
}

// Nomor 2 

echo"<br>";

$array = array("apel", "nanas", "mangga", "jeruk");

// Menggunakan looping foreach untuk menghitung jumlah elemen
$count = 0;
foreach ($array as $buah) {
    $count++;
}

echo "Terdapat " . $count . " buah";

// Nomor 3

echo"<br>";

$array = array(7, 3, 4, 9);
$total = 0;

// Menggunakan looping foreach untuk menjumlahkan elemen
foreach ($array as $nilai) {
    $total += $nilai;
}

echo "<br> Totalnya adalah " . $total;

?>