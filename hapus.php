<?php
include "koneksi.php";
$nama = $_GET['nama'];
$sql = "delete from siswa where nama='$nama'";
$query = mysqli_query($koneksi, $sql);
   
header("Location: index.php");
?>