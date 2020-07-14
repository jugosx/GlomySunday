<!DOCTYPE html>
<?php include_once '../config/connection.php'; session_start()?>
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
                  <li class="active"><a href="">Home</a></li>
                  <?php
                     if(@$_SESSION['status'] == 'login'){
                        echo "<li><a href=\"history.php\">Riwayat Order</a></li>";
                     }
                  ?>
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
                  <?php
                     if(@$_SESSION['status'] == 'login'){
                        echo "<li><a href=\"logout.php\">Logout</a></li>";
                     }else{
                        echo "<li><a href=\"login_cust.php\">Login</a></li>";
                     }
                  ?>
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
               <h1>Layanan</h1>
            </div>
         </div>
         <!-- container -->
         <div class="container">
            <div class="row">
               <div class="col-md-7 col-md-offset-1 text-center">
                  <h3>Our Plans</h3>
                  <p>Elit uasi quidem minus id omnis a nibh fusce mollis imperdie tlorem ipuset phas ellus ac sodales Lorem ipsum dolor Phas ellus 
                     consectetur adipisicing elit uasi quidem minus id omnis a nibh fusce mollis imperdie tlorem ipuset campas fincas
                     Lorem ipsum dolor Phas ellus ac sodales felis tiam.
                  </p>
                  <a class="btn" href="#">Contact us</a>
               </div>
               <!-- /col-md-6 -->
               <!-- image -->
               <div class="col-md-3">
                  <img src="img/pricing.png" alt="" class="center-block img-responsive">
               </div>
               <!-- /col-md-3 -->
            </div>
            <!-- /row -->
            <div class="price-table margin1">
               <!-- Price table 1 -->
               
               <!-- /Price table 1 -->
               <!-- Price table 2 -->
               
               <!-- /Price table 2 -->
               <!-- Price table 3 -->
               
               <!-- /Price table 3 -->
               <?php 
                  $tersedia['grommer'] = DB::queryFirstField("SELECT COUNT(*) FROM tbl_grommer WHERE status = 'selo'"); //cek grommer tersedia berapa
                  $tersedia['kandang'] = DB::queryFirstField("SELECT COUNT(*) FROM tbl_kandang WHERE status = '0'"); //cek kandang tersedia berapa
                  foreach (DB::query("SELECT * FROM tbl_layanan") as $layanan): ?>
                  <div class="col-lg-3 col-md-6">
                  <div class="plan">
                     <!-- price table header -->
                     <header>
                        <i class="flaticon-dog"></i>
                        <h5 class="plan-title">
                        <?php echo $layanan['nama_layanan'] ?>
                        </h5>
                        <div class="plan-cost"><span class="plan-price">Rp. <?php echo number_format($layanan['harga']) ?></span></div>
                     </header>
                     <!-- plan features -->
                     <h6 class="plan-title"><center>
                        Tersedia : <?php
                           if (strpos($layanan['nama_layanan'], 'penitipan') !== false) {
                              echo $a = $tersedia['kandang'];
                          }else{
                             echo $a = $tersedia['grommer'];
                          }
                        ?>
                     </center></h6>
                     <ul class="plan-features">
                     <?php echo $layanan['keterangan'] ?>
                     </ul>
                     <!-- /plan features -->
                     <!-- button -->
                     <div class="text-center">
                        <a class="btn" <?php if($a == 0){ ?> onclick="alert('Layanan tidak tersedia saat ini')" <?php } else { echo " href=\"order.php\""; }  ?> >Order</a>
                     </div>
                     <!-- /text-center -->
                  </div>
               </div>
                  <?php endforeach ?>
               <!-- Price table 4 -->
               
               
               <!-- /Price table 4 -->
            </div>
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