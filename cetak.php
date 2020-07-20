<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan Pemesanan</title>
</head>
<body>

	<center>

		<h2>Data Laporan Pemesanan </h2>
		<h4>Petshop Mechin 4</h4>

	</center>

	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=Silahkan Login Terlebih Dahulu");
	}
	?>
    <?php include_once 'config/connection.php'; ?>

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
                         
                        </tr>";
                      }
                      ?>
                        <!--  -->
                      </tbody>
                    </table>

	<script>
		window.print();
	</script>

</body>
</html>