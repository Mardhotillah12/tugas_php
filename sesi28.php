<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Nilai</th>
            <th>Hasil</th>
        </tr>
        <?php
        $data = file_get_contents("data.json");
        $students = json_decode($data);

        $tahun_sekarang = 2021;

        foreach ($students as $key => $student) {
            $tanggal_lahir = $student->tanggal_lahir;
            $umur = $tahun_sekarang - substr($tanggal_lahir, 0, 4);

            if ($student->nilai >= 90 && $student->nilai <= 100) {
                $hasil = 'A';
            } elseif ($student->nilai >= 80 && $student->nilai < 90) {
                $hasil = 'B';
            } elseif ($student->nilai >= 70 && $student->nilai < 80) {
                $hasil = 'C';
            } else {
                $hasil = 'D';
            }
 
            // Mengatur warna latar belakang baris secara bergantian
            $color = ($key % 2 == 1) ? "white" : "#ddd";

            echo '<tr style="background-color:' . $color . '">';
            echo '<td>' . ($key + 1) . '</td>';
            echo '<td>' . $student->nama . '</td>';
            echo '<td>' . $student->tanggal_lahir . '</td>';
            echo '<td>' . $umur . '</td>';
            echo '<td>' . $student->alamat . '</td>';
            echo '<td>' . $student->kelas . '</td>';
            echo '<td>' . $student->nilai . '</td>';
            echo '<td>' . $hasil . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>