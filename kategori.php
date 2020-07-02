<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Groomy | Kelola Kategori</title>
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
                      <li><a href="#">Olah Data Kategori</a></li>
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
                        <h4 class="card-title">Form Kategori</h4>
                        <form class="forms-sample">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Id Kategori</label>
                            <div class="col-sm-6">
                              <input type="number" class="form-control" placeholder="Enter ID Kategori">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Kategori</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" placeholder="Nama Kategori">
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
                    <p class="card-description"> Olah Data <code>.Kategori</code> </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> ID </th>
                          <th> Nama </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> 1 </td>
                          <td> 12111 </td>
                          <td> Sutardi Creed </td>
                          <td> 
                            <button type="button" class="btn btn-outline-warning">Edit</button>
                            <button type="button" class="btn btn-outline-danger">Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <td> 2 </td>
                          <td> 12112 </td>
                          <td> Sutardi Barrack </td>
                          <td> 
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