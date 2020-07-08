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
    <title>Petshop Mechin 4 | Kelola Kandang</title>
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
                        <h4 class="card-title">Form Kandang</h4>
                        <form id="form" class="forms-sample" method="POST" action="slave/kandang_crud.php?proses=insert">
                          <div class="form-group row">
                            <!-- <label class="col-sm-3 col-form-label">Id kandang</label> -->
                            <div class="col-sm-6">
                              <input type="hidden" name="id_kandang" class="form-control" placeholder="Enter ID kandang">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Kandang</label>
                            <div class="col-sm-6">
                              <input type="text" name="nama_kandang" class="form-control" placeholder="Nama kandang">
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
                    <h4 class="card-title">Olah Data Kandang</h4>
                    <p class="card-description"> Olah Data <code>.kandang</code> </p>
                    <table class="table table-bordered layanan">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Nama_kandang kandang </th>
                          <th> Status </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $no = 1;
                      
                      foreach(DB::query("SELECT * FROM tbl_kandang") as $pel){
                        $status = $pel['status'] == 1 ? 'Terisi' : 'Kosong';
                        echo "<tr>
                        <td>".$no++."</td>
                        <td> $pel[nama_kandang]</td>
                        <td> $status </td>
                        <td>
                          <button type=\"button\" onclick=\"kandang_edit('$pel[id_kandang]')\" class=\"btn btn-outline-warning\">Edit</button>
                          <button type=\"button\" onclick=\"kandang_delete('$pel[id_kandang]')\" class=\"btn btn-outline-danger\">Hapus</button>
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
          function kandang_edit(id){
            $.ajax({
              type: "POST",
              url: "slave/kandang_crud.php?proses=get",
              data: {id:id},
              dataType: "JSON",
              success: function (json) {
                $('input[name=id_kandang]').val(json.id_kandang);
                $('input[name=nama_kandang]').val(json.nama_kandang);
                $("#form").attr('action', 'slave/kandang_crud.php?proses=update');
                $('html, body').animate({
                    scrollTop: $(".page-title").offset().top
                }, 700);
                $("#warning").show();
              }
            });
          }

          function kandang_delete(id){
            if(confirm("Yakin akan menghapus data ini?")===true){
              window.open('slave/kandang_crud.php?proses=delete&id='+id,'_self');
            }
          }

          function kandang_update(id){
            $.ajax({
              type: "POST",
              url: "slave/kandang_crud.php?proses=update",
              data: "data",
              dataType: "dataType",
              success: function (response) {
                
              }
            });
          }
          </script>