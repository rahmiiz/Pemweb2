<?php
require_once('class_nilaimahasiswa.php');

$nama = $_POST['nama'] ?? "";
$nim = $_POST['nim'] ?? "";
$mk = $_POST['MK'] ?? "";
$nilai = $_POST['nilai'] ?? "";

if ($nama && $nim && $mk && $nilai) {
    $nilaiMahasiswa = new NilaiMahasiswa($nama, $nim, $mk, $nilai);

    // Tampilkan data mahasiswa dan nilai
    $nilaiMahasiswa->tampilkanData();

    // hasil ujian
    echo "<br> Grade: " . $nilaiMahasiswa->cekGrade();

    // status kelulusan
    echo "<br> Hasil Ujian: " . $nilaiMahasiswa->cekKelulusan();
}
?>