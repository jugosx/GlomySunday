<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Groomy | Kelola Pelanggan</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
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
            <div class="row page-title-header">
              <div class="col-12">
                <div class="page-header">
                  <h4 class="page-title">Dashboard</h4>
                  <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                    <ul class="quick-links">
                      <li><a href="#">Olah Data Pelanggan</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- Page Title Header Ends-->
            
            <div class="row">
            <div class="col-12 stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Form Pelanggan</h4>
                        <form class="forms-sample">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Id Pelanggan</label>
                            <div class="col-sm-6">
                              <input type="number" class="form-control" placeholder="Enter ID Pelanggan">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" placeholder="Nama Pelanggan">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" placeholder="Alamat">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No Telp</label>
                            <div class="col-sm-6">
                              <input type="number" class="form-control" placeholder="No Telp">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-6">
                              <input type="email" class="form-control" placeholder="Email">
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
                    <h4 class="card-title">Olah Data Pelanggan</h4>
                    <p class="card-description"> Olah Data <code>.Pelanggan</code> </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Nama Pelanggan </th>
                          <th> Alamat </th>
                          <th> No. Telp </th>
                          <th> Email </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> 1 </td>
                          <td> Budi Swastika</td>
                          <td> Jalan Pegangsaan </td>
                          <td> 08123321122 </td>
                          <td> rudi@xnxx.com </td>
                          <td> 
                            <button type="button" class="btn btn-outline-primary">Info</button>
                            <button type="button" class="btn btn-outline-warning">Edit</button>
                            <button type="button" class="btn btn-outline-danger">Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <td> 2 </td>
                          <td> Salis Swastika</td>
                          <td> Jalan Surakarta </td>
                          <td> 08123321122 </td>
                          <td> rudi@xnxx.com </td>
                          <td> 
                            <button type="button" class="btn btn-outline-primary">Info</button>
                            <button type="button" class="btn btn-outline-warning">Edit</button>
                            <button type="button" class="btn btn-outline-danger">Hapus</button>
                          </td>
                        </tr>
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