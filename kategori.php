<?php

// Fungsi untuk menghitung BMI
function hitungBMI($tinggi, $berat) {
  $tinggi_m = $tinggi / 100; // Konversi tinggi ke dalam satuan meter
  $bmi = $berat / ($tinggi_m * $tinggi_m); // Hitung BMI
  return $bmi;
}

// Fungsi untuk menentukan kategori berat badan berdasarkan BMI
function kategoriBeratBadan($bmi) {
  if ($bmi < 18.5) {
    return "kurus";
  } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
    return "normal";
  } elseif ($bmi >= 25 && $bmi <= 29.9) {
    return "gemuk";
  } else {
    return "obesitas";
  }
}

// Input variabel dari user
$nama = "Abel"; // Contoh nama
$tinggi = 160; // Contoh tinggi dalam satuan cm
$berat = 61; // Contoh berat dalam satuan kg

// Hitung BMI dan tentukan kategori berat badan
$bmi = hitungBMI($tinggi, $berat);
$kategori = kategoriBeratBadan($bmi);

// Tampilkan hasil ke layar
echo "Halo, " . $nama . ". Nilai BMI anda adalah " . round($bmi, 1) . ", anda termasuk " . $kategori . ".";

?>