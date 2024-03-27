<?php
require_once('class_persegipanjang.php');

$persegi1 = new PersegiPanjang(5, 10); 
$persegi2 = new PersegiPanjang(3, 7); 

// Panggil untuk menghitung luas dan keliling
echo "Luas Persegi Panjang 1: " . $persegi1->getLuas();
echo "<br>Keliling Persegi Panjang 1: " . $persegi1->getKeliling();

echo "<br>Luas Persegi Panjang 2: " . $persegi2->getLuas();
echo "<br>Keliling Persegi Panjang 2: " . $persegi2->getKeliling();
?>