<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM periksa";
$periksaa = $dbh->query($query);
?>
<div class="container-fluid px-4">
    <div class="d-flex mt-4">
        <h3 class="me-auto">Pemeriksaan Pasien</h3>
        <a href="#" class="btn btn-primary">Tambah Data</a>
    </div>
    <table class="table mt-4">
        <tr>
            <th>Tanggal</th>
            <th>Berat Badan</th>
            <th>Tinggi Badan</th>
            <th>Tensi Darah</th>
            <th>Keterangan</th>
            <th>No Pasien</th>
            <th>No Dokter</th>
        </tr>

        <?php
        $no = 0;
        foreach ($periksaa as $periksa) : ?>
            <tr>
                <td><?= $periksa['tanggal'] ?></td>
                <td><?= $periksa['berat'] ?></td>
                <td><?= $periksa['tz'] ?></td>
                <td><?= $periksa['gender'] ?></td>
                <td><?= $periksa['alamat'] ?></td>
                
            </tr>
        <?php endforeach ?>
    </table>
</div>

<?php
include_once('bottom.php');
?>