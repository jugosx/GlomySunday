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
                        <form class="forms-sample" id="form" method="post" action="slave/pesanan_crud.php?proses=insert" enctype="multipart/form-data">
                          <div class="form-group row">
                            <!-- <label class="col-sm-3 col-form-label">Id Pemesanan</label> -->
                            <div class="col-sm-6">
                              <input type="hidden" class="form-control" placeholder="Enter ID Pesanan">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal</label>
                            <div class="col-sm-6 gj-datepicker gj-datepicker-bootstrap gj-unselectable input-group">
                              <input name="tanggal" type="datetime-local" class="form-control" id="datepicker" width="276" placeholder="dd/mm/yyyy" /> <script>
                                    $('#datepicker').datepicker({
                                        uiLibrary: 'bootstrap4'
                                    });
                                </script>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kategori Layanan</label>
                            <div class="col-sm-6">
                              <select name="id_layanan" class="form-control">
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
                              <select name="id_pelanggan" class="form-control">
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
                            <label class="col-sm-3 col-form-label">Status Pembayaran</label>
                            <div class="col-sm-6">
                              <select name="status" class="form-control">
                              <option value="">-Pilih Status Pembayaran-</option>
                              <option value="0"> Meneunggu Pembayaran </option>
                              <option value="1"> Lunas </option>
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
                              <input name ="jenis_hewan" type="text" class="form-control" placeholder="Hewan">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Harga</label>
                            <div class="col-sm-6">
                              <select name="harga" class="form-control">
                               <?php
                                  foreach(DB::query("SELECT id_layanan,nama_layanan,harga FROM tbl_layanan") as $layanan){
                                    echo "<option value=\"$layanan[id_layanan]\">$layanan[nama_layanan] Rp. ".number_format($layanan['harga'])."</option>";
                                  }
                               ?>
                              </select>
                            </div>
                          </div>
                          <!-- <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Bukti Pembayaran</label>
                              <div class="col-sm-6">
                              <input type="file" name="gambar" class="form-control">
                            </div>
                          </div> -->
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status Progress</label>
                            <div class="col-sm-6">
                              <select name="status_progress" class="form-control">
                              <option value="">-Pilih Status-</option>
                              <option value="Pesanan Masuk"> Pesanan Masuk </option>
                              <option value="Sedang Perawatan"> Sedang Perawatan </option>
                              <option value="Selesai"> Selesai </option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Grommer</label>
                            <div class="col-sm-6">
                              <select name="id_grommer" class="form-control">
                              <option value="">-Pilih Grommer-</option>
                              <?php
                                  foreach(DB::query("SELECT id_grommer,nama FROM tbl_grommer") as $grommer){
                                    echo "<option value=\"$grommer[id_grommer]\">$grommer[nama]</option>";
                                  }
                               ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Check In</label>
                            <div class="col-sm-6 gj-datepicker gj-datepicker-bootstrap gj-unselectable input-group">
                              <input name="checkin" type="datetime-local" class="form-control" id="datepicker" width="276" placeholder="dd/mm/yyyy" /> <script>
                                    $('#datepicker').datepicker({
                                        uiLibrary: 'bootstrap4'
                                    });
                                </script>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Check Out</label>
                            <div class="col-sm-6 gj-datepicker gj-datepicker-bootstrap gj-unselectable input-group">
                              <input name="checkout" type="datetime-local" class="form-control" id="datepicker" width="276" placeholder="dd/mm/yyyy" /> <script>
                                    $('#datepicker').datepicker({
                                        uiLibrary: 'bootstrap4'
                                    });
                                </script>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-success mr-2">Simpan</button>
                          <a href="pesanan.php" class="btn btn-light">Batal</a>
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
                    <table class="table table-bordered table-responsive layanan">
                      <thead>
                        <tr>
                          <th> No </th>
                          <th> Tanggal </th>
                          <th> Layanan </th>
                          <th> Pelanggan </th>
                          <th> Status Pembayaran </th>
                          <th> Keterangan </th>
                          <th> Bukti Bayar </th>
                          <th> Harga </th>
                          <th> Status Progress </th>
                          <th> Grommer / Kandang </th>
                          <th> Check In </th>
                          <th> Check Out </th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                        <!--  -->
                      <?php
                      $no = 1;
                      foreach(DB::query("SELECT a.*,p.nama,c.nama_layanan ,g.nama as grommer, nama_kandang FROM tbl_pemesanan a JOIN tbl_pelanggan p ON p.id_pelanggan = a.id_pelanggan JOIN tbl_layanan c ON  c.id_layanan = a.id_layanan LEFT JOIN tbl_grommer g ON g.id_grommer = a.id_grommer LEFT JOIN tbl_kandang k ON k.id_kandang = a.id_kandang") as $pesanan){
                        $status = "Menunggu pembayaran";
                        if($pesanan['status'] == 1){
                          $status = "Lunas";
                        }

                        $addon = $pesanan['nama_kandang'];

                        if($pesanan['grommer'] != ''){
                          $addon = $pesanan['grommer'];
                        }
                        echo"
                        <tr>
                          <td>".$no++."</td>
                          <td> ".tanggalDMY($pesanan['tanggal'])." </td>
                          <td> {$pesanan['nama_layanan']} </td>
                          <td> {$pesanan['nama']} </td>
                          <td> {$status} </td>
                          <td title=\"$pesanan[keterangan]\"> ".substr($pesanan['keterangan'],0,50)." ... </td>
                          <td> <img src=\"$pesanan[bukti_pembayaran]\" class=\"img img-responsive\" alt=\"\"> </td>
                          <td> ".number_format(harga($pesanan['id_pemesanan']))." </td>
                          <td> {$pesanan['status_progress']} </td>
                          <td> $addon </td>
                          <td> ".tanggalDMY($pesanan['checkin'])." </td>
                          <td> ".tanggalDMY($pesanan['checkout'])." </td>
                          <td> 
                            <button type=\"button\" onclick=\"pesanan_edit('$pesanan[id_pemesanan]')\" class=\"btn btn-outline-primary\">Action</button>
                            <button type=\"button\" onclick=\"pesanan_delete('$pesanan[id_pemesanan]')\" class=\"btn btn-outline-danger\">Hapus</button>
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
          <script>
          function pesanan_edit(id){
            $.ajax({
              type: "POST",
              url: "slave/pesanan_crud.php?proses=get",
              data: {id:id},
              dataType: "JSON",
              success: function (json) {
                $('#tanggal').val(json.tanggal);
                console.log(json.tanggal);
                $('input[name=id_pemesanan]').val(json.id_pemesanan);
                $('input[name=tanggal]').val(json.tanggal);
                $('select[name=id_layanan]').val(json.id_layanan);
                $('select[name=id_pelanggan]').val(json.id_pelanggan);
                $('select[name=status]').val(json.status);
                $('input[name=jenis_hewan]').val(json.jenis_hewan);
                $('textarea[name=keterangan]').html(json.keterangan);
                $('input[name=status_progress]').val(json.status_progress);
                $('input[name=id_grommer]').val(json.id_grommer);
                $('input[name=checkin]').val(json.checkin);
                $('input[name=checkout]').val(json.checkout);
                // $('input[name=harga]').val(json.harga);
                // $('textarea[name=keterangan]').html(json.keterangan);
                $("#form").attr('action', 'slave/pesanan_crud.php?proses=update');
                $('html, body').animate({
                    scrollTop: $(".page-title").offset().top
                }, 700);
                $("#warning").show();
              }
            });
          }

          function pesanan_delete(id){
            if(confirm("Yakin akan menghapus data ini?")===true){
              window.open('slave/pesanan_crud.php?proses=delete&id='+id,'_self');
            }
          }

          function pesanan_update(id){
            $.ajax({
              type: "POST",
              url: "slave/pesanan_crud.php?proses=update",
              data: "data",
              dataType: "dataType",
              success: function (response) {
                
              }
            });
          }
          </script>