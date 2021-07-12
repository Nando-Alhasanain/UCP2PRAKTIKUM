<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Data Mahasiswa</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
              Data Mahasiswa
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
          <p><a href="admin.php">Home</a> / Edit data karyawan / <?php echo $data['nama'] ?></p>
          <div class="card">
            <div class="card-header">
              <p class="fw-bold">Profil Karyawan</p>
            </div>
            <div class="card-body fw-bold">
                <form method="post" action="update.php">
                  <div class="mb-3">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>">
                  </div>
                  <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama" value="<?php echo $data['nama']; ?>">
                  </div>
                  <div class="mb-3">
                    <label for="KTP" class="form-label">KTP</label>
                    <input type="text" class="form-control" id="KTP" placeholder="Masukkan nomor KTP" name="ktp" value="<?php echo $data['ktp']; ?>">
                  </div>
                  <div class="mb-3">
                    <label for="Telpon" class="form-label">Telpon</label>
                    <input type="text" class="form-control" id="Telpon" placeholder="Masukkan nomo telpon" name="telp" value="<?php echo $data['telp']; ?>">
                  </div>
                  <div class="mb-3">
                    <label for="ThnMasuk" class="form-label">Tahun Masuk</label>
                    <input type="text" class="form-control" id="ThnMasuk" placeholder="Masukkan tahun masuk" name="thnMasuk" value="<?php echo $data['thnMasuk']; ?>">
                  </div>
                  <div class="mb-3">
                    <label for="MasaKerja" class="form-label">Masa kerja</label>
                    <input type="text" class="form-control" id="MasaKerja" placeholder="Masukkan masa kerja" name="masaKerja" value="<?php echo $data['masaKerja']; ?>">
                  </div>

                  <button type="submit" class="btn btn-primary" value="SIMPAN">Update</button>
                </form>
            </div>
          </div>
        </div>
    <?php
    }
    ?>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  
  </body>
</html>