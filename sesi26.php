<?php

// Nomor 1

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "Angka $i adalah bilangan genap<br>";
    } else {
        echo "Angka $i adalah bilangan ganjil<br>";
    }
}

// Nomor 2
echo "<br>";
for ($tahun = 2000; $tahun <= 2023; $tahun++) {
    if (($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0) {
        echo "Tahun $tahun adalah tahun kabisat<br>";
    } else {
        echo "Tahun $tahun bukan tahun kabisat<br>";
    }
}

// Nomor 3
echo "<br>";

for ($x = 9; $x >= 1; $x--) {
    for ($y = 1; $y <= $x; $y++) {
        echo $y;
    }
    echo "<br>";
}

?>