<?php

function volumeKubus($sisi) {
  return $sisi * $sisi * $sisi;
}

function volumeBalok($panjang, $lebar, $tinggi) {
  return $panjang * $lebar * $tinggi;
}

function volumeTabung($jari, $tinggi) {
  return 3.14 * $jari * $jari * $tinggi;
}

echo "Volume kubus dengan diketahui sisi 5 adalah: " . volumeKubus(5) . "<br>";
echo "Volume balok dengan diketahui panjang 5, lebar 3, dan tinggi 2 adalah: " . volumeBalok(5, 3, 2) . "<br>";
echo "Volume tabung dengan diketahui jari-jari 7 dan tinggi 10 adalah: " . volumeTabung(7, 10) . "<br>";

?>