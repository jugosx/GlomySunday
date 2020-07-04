<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Petshop Mechin 4 | Kelola Kategori</title>
    <!-- plugins:css -->
    <?php require 'partials/style.css.php' ?>
    <!-- endinject -->
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/navbar.php -->
      <?php include_once 'partials/navbar.php'; ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/sidebar.php -->
      <?php include_once 'partials/sidebar.php'; ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <?php include_once 'partials/title-header.php' ?>
            <!-- Page Title Header Ends-->
            
            <div class="row">
            <div class="col-12 stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Form Layanan</h4>
                        <form class="forms-sample">
                          <div class="form-group row">
                            <input type="hidden" name="id_layanan">
                            <label class="col-sm-3 col-form-label">Nama Layanan</label>
                              <div class="col-sm-6">
                              <input type="text" name="layanan_layanan" class="form-control" placeholder="Nama Layanan">
                            </div>
                          </div>
                          <!--  -->
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Keterangan</label>
                              <div class="col-sm-6">
                              <textarea name="keterangan" class="form-control" id="" cols="30" rows="10" placeholder="Keterangan"></textarea>
                            </div>
                          </div>
                          <!--  -->
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Harga Layanan</label>
                              <div class="col-sm-6">
                              <input type="number" name="harga" class="form-control" placeholder="Harga Layanan">
                            </div>
                          </div>
                          <!--  -->
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Gambar</label>
                              <div class="col-sm-6">
                              <input type="file" name="gambar" class="form-control">
                            </div>
                          </div>
                          <button type="submit" class="btn btn-success mr-2">Simpan</button>
                          <button class="btn btn-light">Batal</button>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 stretch-card"> <br> </div>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Olah Data Kategori</h4>
                    <p class="card-description"> Olah Data <code>.Layanan</code> </p>
                    <table class="table table-bordered layanan">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Nama Layanan </th>
                          <th> Keterangan </th>
                          <th> Harga </th>
                          <th> Gambar </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                      <!--  -->
                        <tr>
                          <td> 1 </td>
                          <td> Nama La </td>
                          <td> Grooming Singa </td>
                          <td> 2,000 </td>
                          <td> <img src="" class="img img-responsive" alt=""> </td>
                          <td> 
                            <button type="button" class="btn btn-outline-warning">Edit</button>
                            <button type="button" class="btn btn-outline-danger">Hapus</button>
                          </td>
                        </tr>
                        <!--  -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <?php include_once 'partials/footer.php'?>