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
    <title>Petshop Mechin 4 | Kelola G+rommer</title>
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
                        <h4 class="card-title">Form Grommer</h4>
                        <form id="form" class="forms-sample" method="POST" action="slave/grommer_crud.php?proses=insert">
                          <div class="form-group row">
                            <!-- <label class="col-sm-3 col-form-label">Id grommer</label> -->
                            <div class="col-sm-6">
                              <input type="hidden" name="id_grommer" class="form-control" placeholder="Enter ID grommer">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-6">
                              <input type="text" name="nama" class="form-control" placeholder="Nama grommer">
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
                    <h4 class="card-title">Olah Data grommer</h4>
                    <p class="card-description"> Olah Data <code>.grommer</code> </p>
                    <table class="table table-bordered layanan">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Nama grommer </th>
                          <th> Status </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $no = 1;
                      foreach(DB::query("SELECT * FROM tbl_grommer") as $pel){
                        echo "<tr>
                        <td>".$no++."</td>
                        <td> $pel[nama]</td>
                        <td> ".ucfirst($pel['status'])." </td>
                        <td>
                          <button type=\"button\" onclick=\"grommer_edit('$pel[id_grommer]')\" class=\"btn btn-outline-warning\">Edit</button>
                          <button type=\"button\" onclick=\"grommer_delete('$pel[id_grommer]')\" class=\"btn btn-outline-danger\">Hapus</button>
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
          function grommer_edit(id){
            $.ajax({
              type: "POST",
              url: "slave/grommer_crud.php?proses=get",
              data: {id:id},
              dataType: "JSON",
              success: function (json) {
                $('input[name=id_grommer]').val(json.id_grommer);
                $('input[name=nama]').val(json.nama);
                $("#form").attr('action', 'slave/grommer_crud.php?proses=update');
                $('html, body').animate({
                    scrollTop: $(".page-title").offset().top
                }, 700);
                $("#warning").show();
              }
            });
          }

          function grommer_delete(id){
            if(confirm("Yakin akan menghapus data ini?")===true){
              window.open('slave/grommer_crud.php?proses=delete&id='+id,'_self');
            }
          }

          function grommer_update(id){
            $.ajax({
              type: "POST",
              url: "slave/grommer_crud.php?proses=update",
              data: "data",
              dataType: "dataType",
              success: function (response) {
                
              }
            });
          }
          </script>