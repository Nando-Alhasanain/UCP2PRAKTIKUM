<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" />

    <title>Data Karyawan</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Data Karyawan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            
            <a class="nav-link" href="index.php">Log Out</a>
          </div>
        </div>
      </div>
    </nav>
    
    <div class="container data-karyawan mt-5">
      <!-- Modal -->
      <!-- button munculkan modal -->
      <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahData">Tambah Data</button>
      <!-- Modal tambah data -->
      <div class="modal fade" id="tambahData" tabindex="-1" aria-tabelledby="tambahDataLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- membuat form dgn mothod post utk pangil file store.php -->
            <form method="post" action="store.php" name="form">
              <div class="modal-header">
                <h5 class="model-tittle" id="tambahDataLabel">Masukan data karyawan</h5>
                <button type="button" class="btn-close" data-bs-dimiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body">
                <div class="mb-3">
                  <label for="nama" class="form-table">Nama</label>
                  <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" required />
                </div>

                <div class="mb-3">
                  <label for="KTP" class="form-table">KTP</label>
                  <input type="text" class="form-control" id="KTP" placeholder="Masukkan Nomor KTP" name="ktp" required />
                </div>

                <div class="mb-3">
                  <label for="Telp" class="form-table">Telpon</label>
                  <input type="text" class="form-control" id="Telpon" placeholder="Masukkan Nomor Telpon" name="telp" required />
                </div>

                <div class="mb-3">
                  <label for="ThnMasuk" class="form-table">Tahun Masuk</label>
                  <input type="text" class="form-control" id="ThnMasuk" placeholder="Masukkan Tahun Masuk" name="thnMasuk" required />
                </div>

                <div class="mb-3">
                  <label for="MasaKerja" class="form-table">Jumlah Masa Kerja</label>
                  <input type="text" class="form-control" id="MasaKerja" placeholder="Masukkan Jumlah Masa kerja" name="masaKerja" required />
                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" value="SIMPAN">Tambah</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Akhir modal -->
      <table class="table table-striped" id="tableMahasiswa">
        <thead>
          <tr>
            <th scope="col-md">No.</th>
            <th scope="col-md">Nama</th>
            <th scope="col-md">No. KTP</th>
            <th scope="col-md">No. Telpon</th>
            <th scope="col-md">Tahun Masuk</th>
            <th scope="col-md">Jumlah Masa Kerja</th>
            <th scope="col-md">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
                include 'config.php';
                $no = 1;    
                $karyawan = mysqli_query($koneksi, "select * from karyawan");

                while ($data = mysqli_fetch_array($karyawan)) {
                ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['ktp']; ?></td>
            <td><?php echo $data['telp']; ?></td>
            <td><?php echo $data['thnMasuk']; ?></td>
            <td><?php echo $data['masaKerja']; ?></td>
            

            <td>
              <a href="detail.php?id=<?php echo $data['id']; ?>" class="btn btn-success btn-sm text-white">DETAIL</a>
              <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm text-white">EDIT</a>
              <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin Akan Menghapus Data Masasiswa Ini?')">HAPUS</a>
              <a href="print.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-sm text-white">CETAK</a>
            </td>
          </tr>
          <?php
                }
                ?>
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script>
      $(document).ready(function () {
        $("#tableMahasiswa").DataTable();
      });
    </script>
  </body>
</html>
