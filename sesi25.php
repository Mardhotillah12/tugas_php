<?php

// Nomor 1
$angka1 = 1;
$angka2 = 2;

if ($angka1 % 2 == 0) {
    echo $angka1 . " adalah bilangan genap.";
} else {
    echo $angka1 . " adalah bilangan ganjil.";
}

echo "<br>";

if ($angka2 % 2 == 0) {
    echo $angka2 . " adalah bilangan genap.";
} else {
    echo $angka2 . " adalah bilangan ganjil.";
}

// Nomor 2

echo "<br>";
$tahun = 2024;

if ($tahun % 4 == 0) {
    if ($tahun % 100 == 0) {
        if ($tahun % 400 == 0) {
    echo $tahun . " adalah tahun kabisat.";
} else {
    echo $tahun . " bukan tahun kabisat.";
    }
} else {
    echo $tahun . " adalah tahun kabisat.";
    }
} else {
    echo $tahun . " bukan tahun kabisat.";
}

// Nomor 3

echo "<br>";
$nilai = 88; 

if ($nilai >= 90) {
	$grade = 'A';
} else if ($nilai >= 80) {
	$grade = 'B';
} else if ($nilai >= 70) {
	$grade = 'C';
} else if ($nilai >= 60) {
	$grade = 'D';
} else {
	$grade = 'E';
}
	echo "Nilai: $nilai<br>";
	echo "Grade: $grade<br><br>";


?>
