<?php

// Menghitung luas persegi
function luasPersegi($sisi) {
  return $sisi * $sisi;
}

// Menghitung luas persegi panjang
function luasPersegiPanjang($panjang, $lebar) {
  return $panjang * $lebar;
}

// Menghitung luas segitiga
function luasSegitiga($alas, $tinggi) {
  return 0.5 * $alas * $tinggi;
}

// Menghitung luas trapesium
function luasTrapesium($sisiAtas, $sisiBawah, $tinggi) {
  return 0.5 * ($sisiAtas + $sisiBawah) * $tinggi;
}

// Menghitung luas lingkaran
function luasLingkaran($jari) {
  return 3.14 * $jari * $jari;
}

// Contoh penggunaan fungsi-fungsi di atas
echo "Luas persegi dengan diketahui sisi nya 4 adalah: " . luasPersegi(5) . "<br>";
echo "Luas persegi panjang dengan diketahui panjang 5 dan lebar 3 adalah: " . luasPersegiPanjang(6, 4) . "<br>";
echo "Luas segitiga dengan diketahui alas 6 dan tinggi 8 adalah: " . luasSegitiga(12, 8) . "<br>";
echo "Luas trapesium dengan diketahui sisi atas 5, sisi bawah 9, dan tinggi 4 adalah: " . luasTrapesium(4, 10, 5) . "<br>";
echo "Luas lingkaran dengan diketahui jari-jari 7 adalah: " . luasLingkaran(14) . "<br>";

?>