<!DOCTYPE html>
<?php include_once '../config/connection.php';
include 'sess_cust.php';
 ?>
<html>
   <head>
      <meta charset="utf-8">
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Page title -->
      <title>Petz - Pet HTML5 Template</title>
      <!--[if lt IE 9]>
      <script src="js/respond.js"></script>
      <![endif]-->
      <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
      <!-- Icon fonts -->
      <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="fonts/flaticons/flaticon.css" rel="stylesheet" type="text/css">
      <link href="fonts/glyphicons/bootstrap-glyphicons.css" rel="stylesheet" type="text/css">
      <!-- Google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Lato:400,800" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi" rel="stylesheet">
      <!-- Style CSS -->
      <link href="css/style.css" rel="stylesheet">
      <!-- Plugins CSS -->
      <link rel="stylesheet" href="css/plugins.css">
      <!-- Color Style CSS -->
      <link href="styles/maincolors.css" rel="stylesheet">
      <!-- Favicons-->
      <link rel="apple-touch-icon" sizes="72x72" href="../../../www.ingridkuhn.com/apple-icon-72x72.html">
      <link rel="apple-touch-icon" sizes="114x114" href="../../apple-icon-114x114.png">
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
   </head>
   <body id="page-top">

      <!-- Preloader -->
      <div id="preloader">
         <div class="spinner">
            <div class="bounce1"></div>
         </div>
      </div>
      <!-- Preloader ends -->
      <nav class="navbar navbar-custom navbar-fixed-top">
         <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
               <i class="fa fa-bars"></i>
               </button>
               <div class="navbar-brand navbar-brand-centered">
                  <a href="index-2.html">
                     <!-- logo  -->
                     <img src="img/logo.png" class="img-responsive" alt="">
                  </a>
               </div>
            </div>
            <!--/navbar-header -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-brand-centered">
               <ul class="nav navbar-nav">
                  <li class="active"><a href="index.php">Home</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <!-- <li><a href="gallery.html">Gallery</a></li>
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog<b class="caret"></b></a>
                     <ul class="dropdown-menu">
                        <li><a href="blog.html">Blog Home</a></li>
                        <li><a href="blog-single.html">Blog Post</a></li>
                     </ul>
                  </li> -->
                  <li><a href="history.php">Lacak</a></li>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </div>
         <!-- /.container -->
      </nav>
      <!-- /navbar ends -->
      <!-- Section Pricing -->
      <section id="pricing" class="pages">
         <div class="jumbotron" data-stellar-background-ratio="0.5">
            <!-- Heading -->
            <div class="jumbo-heading" data-stellar-background-ratio="1.2">
               <h1>Lacak</h1>
            </div>
         </div>
         <!-- container -->
         <div class="container">
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Lacak Pesanan</h4>
                    <p class="card-description"> Lacak <code>.Pesanan</code> </p>
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
                          <th> Grommer </th>
                          <th> Check In </th>
                          <th> Check Out </th>
                        </tr>
                      </thead>
                      <tbody>
                        <!--  -->
                      <?php
                      $no = 1;
                      foreach(DB::query("SELECT * FROM tbl_pemesanan WHERE id_pelanggan = %i",$_SESSION['nama']) as $pesanan){
                        echo"
                        <tr>
                          <td>".$no++."</td>
                          <td> {$pesanan['tanggal']} </td>
                          <td> {$pesanan['id_layanan']} </td>
                          <td> {$pesanan['id_pelanggan']} </td>
                          <td> {$pesanan['status']} </td>
                          <td title=\"$pesanan[keterangan]\"> ".substr($pesanan['keterangan'],0,50)." ... </td>
                          <td> <img src=\"$pesanan[gambar]\" class=\"img img-responsive\" alt=\"\"> </td>
                          <td> ".number_format($pesanan['id_layanan'])." </td>
                          <td> {$pesanan['status_progress']} </td>
                          <td> {$pesanan['id_grommer']} </td>
                          <td> {$pesanan['checkin']} </td>
                          <td> {$pesanan['checkout']} </td>
                          
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
               <!-- /col-md-6 -->
               <!-- image -->
               <!-- <div class="col-md-3">
                  <img src="img/pricing.png" alt="" class="center-block img-responsive">
               </div> -->
               <!-- /col-md-3 -->
            </div>
            <!-- /row -->
            
            <!-- /Price tables  ends -->
         </div>
         <!-- /container-->
      </section>
      <!-- /Section ends -->
      <!-- Footer -->		
      <footer>
         <!-- Contact info -->
         <div class="container">
            <div class="col-md-4 text-center">
               <!-- Footer logo -->
               <img src="img/logo.png" alt="" class="center-block img-responsive">
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 text-center res-margin">
               <ul class="list-unstyled">
                  <li><i class="fa fa-phone"></i>(000) 000-000</li>
                  <li><i class="fa fa-envelope"></i>Email: <a href="mailto:your@email.com">site@email.com</a></li>
                  <li><i class="fa fa-map-marker"></i>123 Anywhere Street,London,LO4 6ON</li>
               </ul>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 text-center res-margin">
               <h5>Follow us</h5>
               <!--Social icons -->
               <div class="social-media">
                  <a href="#" title=""><i class="fa fa-twitter"></i></a>
                  <a href="#" title=""><i class="fa fa-facebook"></i></a>
                  <a href="#" title=""><i class="fa fa-google-plus"></i></a>
                  <a href="#" title=""><i class="fa fa-instagram"></i></a>
               </div>
            </div>
            <!-- /.col-md-4 -->
         </div>
         <!-- /.container -->
         <!-- Credits-->
         <div class="credits col-md-12 text-center">
            Copyright © 2017 - Designed by <a href="http://www.ingridkuhn.com/">Ingrid Kuhn</a>
            <!-- Go To Top Link -->
            <div class="page-scroll hidden-sm hidden-xs">
               <a href="#page-top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
            </div>
         </div>
         <!-- /credits -->
      </footer>
      <!-- /footer ends -->
      <!-- Core JavaScript Files -->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- Main Js -->
      <script src="js/main.js"></script>
      <!--Other Plugins -->
      <script src="js/plugins.js"></script>
      <!-- Prefix free CSS -->
      <script src="js/prefixfree.js"></script>
<!-- Bootstrap Select Tool (For Module #4) -->
	<script src="switcher/js/bootstrap-select.js"></script>
	<!-- UI jQuery (For Module #5 and #6) -->
	<script src="../../../ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.js" type="text/javascript"></script>
	<!-- All Scripts & Plugins -->
	<script src="switcher/js/dmss.js"></script>		  
   </body>

<!-- Mirrored from ingridkuhn.com/themes/petz/pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 08:02:58 GMT -->
</html>