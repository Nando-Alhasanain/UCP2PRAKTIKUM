<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Data Karyawan</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
              Data Karyawan
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ms-auto">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Pricing</a>
              </div>
            </div>
        </div>
    </nav>

    <?php 
    // memangil file config.php 
    include 'config.php';
    $id = $_GET['id'];

    $karyawan = mysqli_query($koneksi, "select * from karyawan where id='$id'");
    while ($data = mysqli_fetch_assoc($karyawan)) {
    ?>
        <div class="container mt-5">
          <p><a href="admin.php">Home</a> / Detail karyawan / <?php echo $data['nama'] ?></p>
          <div class="card">
            <div class="card-header">
              <p class="fw-bold">Profil Karyawan</p>
            </div>
            <div class="card-body fw-bold">
              <p>Nama : <?php echo $data['nama'] ?></p>
              <p>No. KTP : <?php echo $data['ktp'] ?></p>
              <p>No. Telpon : <?php echo $data['telp'] ?></p>
              <p>Tahun Masuk : <?php echo $data['thnMasuk'] ?></p>
              <p>Jumlah Masa Kerja : <?php echo $data['masaKerja'] ?></p>
              <a href="print.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-sm text-white">CETAK</a>
            </div>
          </div>
        </div>
    <?php
    }
    ?>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  
  </body>
</html>