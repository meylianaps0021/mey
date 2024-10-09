<?php
include "koneksi.php";

echo "<h1>File Data</h1>";


$nama = $_GET['nama'];
$nomor = $_GET['nomor'];
$tanggal = $_GET['tanggal'];

echo "
<h2> Nama =$nama<h2>
<h2> nomor =$nomor<h2>
<h2> Tanggal =$tanggal<h2>

";
//perintah
mysqli_query($koneksi, "INSERT INTO `tb_mey3` (`nama`, `nomor`, `tanggal`) VALUES ('$nama', '$nomor', '$tanggal')");
?>
