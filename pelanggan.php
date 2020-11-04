<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=Silahkan Login Terlebih Dahulu");
	}
	?>
<?php require 'config/connection.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Petshop Mechin 4 | Kelola Pelanggan</title>
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
                        <h4 class="card-title">Form Pelanggan</h4>
                        <form id="form" class="forms-sample" method="POST" action="slave/pelanggan_crud.php?proses=insert">
                          <div class="form-group row">
                            <!-- <label class="col-sm-3 col-form-label">Id Pelanggan</label> -->
                            <div class="col-sm-6">
                              <input type="hidden" name="id_pelanggan" class="form-control" placeholder="Enter ID Pelanggan">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-6">
                              <input type="text" name="nama" class="form-control" placeholder="Nama Pelanggan">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-6">
                              <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No Telp</label>
                            <div class="col-sm-6">
                              <input type="number" name="notelp" class="form-control" placeholder="No Telp">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-6">
                              <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                          </div>
                          <button type="submit" class="btn btn-success mr-2">Simpan</button>
                          <a href="" class="btn btn-light">Batal</a>
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
                    <table class="table table-bordered layanan">
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
                      <?php
                      $no = 1;
                      foreach(DB::query("SELECT * FROM tbl_pelanggan") as $pel){
                        echo "<tr>
                        <td>".$no++."</td>
                        <td> $pel[nama]</td>
                        <td> $pel[alamat] </td>
                        <td> $pel[notelp] </td>
                        <td> $pel[email] </td>
                        <td> 
                          <button type=\"button\" onclick=\"pelanggan_edit('$pel[id_pelanggan]')\" class=\"btn btn-outline-warning\">Edit</button>
                          <button type=\"button\" onclick=\"pelanggan_delete('$pel[id_pelanggan]')\" class=\"btn btn-outline-danger\">Hapus</button>
                          <button type=\"button\" onclick=\"pelanggan_reset('$pel[id_pelanggan]')\" class=\"btn btn-outline-danger\">Reset Password</button>
                        </td>
                      </tr>";
                      }
                      ?>
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
          <script>
          function pelanggan_edit(id){
            $.ajax({
              type: "POST",
              url: "slave/pelanggan_crud.php?proses=get",
              data: {id:id},
              dataType: "JSON",
              success: function (json) {
                $('input[name=id_pelanggan]').val(json.id_pelanggan);
                $('input[name=nama]').val(json.nama);
                $('input[name=alamat]').val(json.alamat);
                $('input[name=notelp]').val(json.notelp);
                $('input[name=email]').val(json.email);
                $("#form").attr('action', 'slave/pelanggan_crud.php?proses=update');
                $('html, body').animate({
                    scrollTop: $(".page-title").offset().top
                }, 700);
                $("#warning").show();
              }
            });
          }

          function pelanggan_delete(id){
            if(confirm("Yakin akan menghapus data ini?")===true){
              window.open('slave/pelanggan_crud.php?proses=delete&id='+id,'_self');
            }
          }

          function pelanggan_reset(id){
            if(confirm("Yakin akan mereset password data ini?\nPassword akan direset menjadi 12345")===true){
              window.open('slave/pelanggan_crud.php?proses=reset&id='+id,'_self');
            }
          }


          function pelanggan_update(id){
            $.ajax({
              type: "POST",
              url: "slave/pelanggan_crud.php?proses=update",
              data: "data",
              dataType: "dataType",
              success: function (response) {
                
              }
            });
          }
          </script>