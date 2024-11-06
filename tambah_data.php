<?php
    include 'koneksi3.php';

    echo "<h1>ini file tambah php </h1>";

    $nama = $_GET['nama'];
    $nomor = $_GET['nomor'];
    $tanggal = $_GET['tanggal'];

echo "
<h1>nama = $nama</h1>
<h1>umur = $nomor/h1>
<h1>tanggal = $tanggal</h1>
";

mysqli_query($koneksi3, "INSERT INTO `tb_siswa`(`nama`, `umur`, `tanggal`) VALUES ('$nama', '$nomor', '$tanggal')");
?>