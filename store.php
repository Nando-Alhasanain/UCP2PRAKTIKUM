<?php
//include koneksi database
include './config.php';

//menangkap data yg dikirim dari form 
$nama = $_POST['nama'];
$ktp = $_POST['ktp'];
$telp = $_POST['telp'];
$thnMasuk = $_POST['thnMasuk'];
$masaKerja = $_POST['masaKerja'];

//menginput data ke database
mysqli_query($koneksi, "insert into karyawan value('', '$nama','$ktp', '$telp','$thnMasuk','$masaKerja')");
//mengembalikan ke halaman awal
header("location:./admin.php");
?>