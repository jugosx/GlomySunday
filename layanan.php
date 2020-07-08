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
    <title>Petshop Mechin 4 | Kelola Layanan</title>
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
                        <form class="forms-sample" id="form" method="post" action="slave/layanan_crud.php?proses=insert" enctype="multipart/form-data">
                          <div class="form-group row">
                            <input type="hidden" name="id_layanan">
                            <label class="col-sm-3 col-form-label">Nama Layanan</label>
                              <div class="col-sm-6">
                              <input type="text" name="nama_layanan" class="form-control" placeholder="Nama Layanan">
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
                          <a href="" class="btn btn-light">Batal</a>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 stretch-card"> <br> </div>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Olah Data Layanan</h4>
                    <!-- <p class="card-description"> Olah Data <code>.Layanan</code> </p> -->
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
                      <?php
                      $no = 1;
                      foreach(DB::query("SELECT * FROM tbl_layanan") as $layanan){
                        echo"
                        <tr>
                          <td>".$no++."</td>
                          <td> {$layanan['nama_layanan']} </td>
                          <td title=\"$layanan[keterangan]\"> ".substr($layanan['keterangan'],0,50)." ... </td>
                          <td> ".number_format($layanan['harga'])." </td>
                          <td> <img src=\"$layanan[gambar]\" class=\"img img-responsive\" alt=\"\"> </td>
                          <td> 
                            <button type=\"button\" onclick=\"layanan_edit('$layanan[id_layanan]')\" class=\"btn btn-outline-warning\">Edit</button>
                            <button type=\"button\" onclick=\"layanan_delete('$layanan[id_layanan]')\" class=\"btn btn-outline-danger\">Hapus</button>
                          </td>
                        </tr>";
                      }
                      ?>
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
          <script>
          function layanan_edit(id){
            $.ajax({
              type: "POST",
              url: "slave/layanan_crud.php?proses=get",
              data: {id:id},
              dataType: "JSON",
              success: function (json) {
                $('input[name=id_layanan]').val(json.id_layanan);
                $('input[name=nama_layanan]').val(json.nama_layanan);
                $('input[name=harga]').val(json.harga);
                $('textarea[name=keterangan]').html(json.keterangan);
                $("#form").attr('action', 'slave/layanan_crud.php?proses=update');
                $('html, body').animate({
                    scrollTop: $(".page-title").offset().top
                }, 700);
                $("#warning").show();
              }
            });
          }

          function layanan_delete(id){
            if(confirm("Yakin akan menghapus data ini?")===true){
              window.open('slave/layanan_crud.php?proses=delete&id='+id,'_self');
            }
          }

          function layanan_update(id){
            $.ajax({
              type: "POST",
              url: "slave/layanan_crud.php?proses=update",
              data: "data",
              dataType: "dataType",
              success: function (response) {
                
              }
            });
          }
          </script>