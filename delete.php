<?php
//koneksi database
include 'config.php';

//Menangkap id yg dikirim dari url
$id = $_GET['id'];

mysqli_query($koneksi, "delete from karyawan where id='$id'");

header("location:admin.php");
?>