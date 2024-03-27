<?php

class NilaiMahasiswa {
    var $nama;
    var $nim;
    var $mataKuliah;
    var $nilai;

    public function __construct($nama, $nim, $mataKuliah, $nilai) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->mataKuliah = $mataKuliah;
        $this->nilai = $nilai;
    }

    public function tampilkanData() {
        echo "Nama: " . $this->nama;
        echo "<br> NIM: " . $this->nim;
        echo "<br> Mata Kuliah: " . $this->mataKuliah;
        echo "<br> Nilai: " . $this->nilai;
    }

    public function cekKelulusan() {
        if ($this->nilai >= 56) {
            return "LULUS";
        } else {
            return "TIDAK LULUS";
        }
    }

    public function cekGrade() {
        if ($this->nilai >= 85 && $this->nilai <= 100) {
            return "A";
        } elseif ($this->nilai >= 70 && $this->nilai <= 84) {
            return "B";
        } elseif ($this->nilai >= 56 && $this->nilai <= 69) {
            return "C";
        } elseif ($this->nilai >= 36 && $this->nilai <= 55) {
            return "D";
        } else {
            return "E";
        }
    }
}

?>