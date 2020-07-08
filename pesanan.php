<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=Silahkan Login Terlebih Dahulu");
	}
	?>
<?php include_once 'config/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Petshop Mechin 4 | Kelola Pesanan</title>
    <!-- plugins:css -->
    <?php require 'partials/style.css.php' ?>
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
                        <h4 class="card-title">Form Pemesanan</h4>
                        <form class="forms-sample">
                          <div class="form-group row">
                            <!-- <label class="col-sm-3 col-form-label">Id Pemesanan</label> -->
                            <div class="col-sm-6">
                              <input type="hidden" class="form-control" placeholder="Enter ID Pesanan">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal</label>
                            <div class="col-sm-6 gj-datepicker gj-datepicker-bootstrap gj-unselectable input-group">
                              <input class="form-control" id="datepicker" width="276" placeholder="dd/mm/yyyy" /> <script>
                                    $('#datepicker').datepicker({
                                        uiLibrary: 'bootstrap4'
                                    });
                                </script>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kategori Layanan</label>
                            <div class="col-sm-6">
                              <select name="layanan" class="form-control">
                               <option value="">-Pilih Layanan-</option>
                               <?php
                                  foreach(DB::query("SELECT id_layanan,nama_layanan FROM tbl_layanan") as $layanan){
                                    echo "<option value=\"$layanan[id_layanan]\">$layanan[nama_layanan]</option>";
                                  }
                               ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Pelanggan</label>
                            <div class="col-sm-6">
                              <select name="pelanggan" class="form-control">
                              <option value="">-Pilih Pelanggan-</option>
                               <?php
                                  foreach(DB::query("SELECT id_pelanggan,nama FROM tbl_pelanggan") as $pel){
                                    echo "<option value=\"$pel[id_pelanggan]\">$pel[nama]</option>";
                                  }
                               ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Keterangan</label>
                              <div class="col-sm-6">
                              <textarea name="keterangan" class="form-control" id="" cols="30" rows="10" placeholder="Keterangan"></textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Hewan</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" placeholder="Hewan">
                            </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Harga</label>
                          <div class="input-group col-sm-6">
                            <div class="input-group-prepend bg-primary border-primary">
                              <span class="input-group-text bg-transparent text-white">Rp.</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append bg-primary border-primary">
                              <span class="input-group-text bg-transparent text-white">.00</span>
                            </div>
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
                    <h4 class="card-title">Olah Data Pesanan</h4>
                    <p class="card-description"> Olah Data <code>.Pesanan</code> </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Tanggal </th>
                          <th> Layanan </th>
                          <th> Pelanggan </th>
                          <th> Hewan </th>
                          <th> Harga </th>
                          <th> Status </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> 1 </td>
                          <td> 11-09-1989</td>
                          <td> Mandi Besar </td>
                          <td> Alexander </td>
                          <td> Asu Teles </td>
                          <td> Rp. 10.000 </td>
                          <td> Belum Lunas </td>
                          <td> 
                            <button type="button" data-toggle="modal" data-target="#pemesananModal" class="btn btn-outline-primary">Info</button>
                            <button type="button" class="btn btn-outline-warning">Edit</button>
                            <button type="button" class="btn btn-outline-danger">Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <td> 2 </td>
                          <td> 11-09-1989</td>
                          <td> Keramas </td>
                          <td> Budi </td>
                          <td> Asu Teles </td>
                          <td> Rp. 10.000 </td>
                          <td> Lunas </td>
                          <td> 
                            <button type="button" data-toggle="modal" data-target="#pemesananModal" class="btn btn-outline-primary" class="btn btn-outline-primary">Info</button>
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
          <div class="modal fade" id="pemesananModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Keterangan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Kie diisi apa cuy
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
          </div>
          <?php include_once 'partials/footer.php'?>