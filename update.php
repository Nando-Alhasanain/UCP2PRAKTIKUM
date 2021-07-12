<?php

include './config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$ktp = $_POST['ktp'];
$telp = $_POST['telp'];
$thnMasuk = $_POST['thnMasuk'];
$masaKerja = $_POST['masaKerja'];

mysqli_query($koneksi, "update karyawan set nama='$nama', ktp='$ktp', telp='$telp', thnMasuk='$thnMasuk', masaKerja='$masaKerja' where id='$id'");

header("location:admin.php");
?>
