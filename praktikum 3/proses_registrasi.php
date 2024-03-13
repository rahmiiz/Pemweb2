<?php
// tangkap input form registrasi
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$skills = $_POST['skills'] ?? [];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

$nilai_skill = [
    'HTML' => 10,
    'CSS' => 10,
    'Javascript' => 20,
    'RWD Bootstrap' => 20,
    'PHP' => 30,
    'Python' => 30,
    'Java' => 50,
];

// hitung total skor skill
$total_skill = 0;
foreach ($skills as $value) {
        $total_skill += $nilai_skill[$value];
}

// tentukan kategori skill
$kategori_skill = '';
if ($total_skill <= 0) {
    $kategori_skill = 'Tidak Memadai';
} elseif ($total_skill <= 40) {
    $kategori_skill = 'Kurang';
} elseif ($total_skill <= 60) {
    $kategori_skill = 'Cukup';
} elseif ($total_skill <= 100) {
    $kategori_skill = 'Baik';
} elseif ($total_skill <= 150) {
    $kategori_skill = 'Sangat Baik';
}

echo "NIM: $nim";
echo "<br>Nama Lengkap: $nama";
echo "<br>Jenis Kelamin: $jk";
echo "<br>Program Studi: $prodi";
echo "<br>Skill: " . join(', ', $skills);
echo "<br>Tempat Domisili: $domisili";
echo "<br>Email: $email";
echo "<br>Skor Skill: $total_skill";
echo "<br>Kategori Skill: $kategori_skill";
?>