<!DOCTYPE html>
<html>
<?php 
include_once '../config/connection.php'; 
include 'sess_cust.php';
?>
   
<!-- Mirrored from ingridkuhn.com/themes/petz/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 08:03:37 GMT -->
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
     <!-- Start Switcher -->
	
	<!-- end demo_changer -->
	<!-- End Switcher -->
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
                  <li><a href="index.php">Home</a></li>
               </ul>
              
            </div>
            <!-- /.navbar-collapse -->
         </div>
         <!-- /.container -->
      </nav>
      <!-- /navbar ends -->
      <!-- Section Contact -->
      <section id="contact" class="pages no-padding">
         <div class="jumbotron" data-stellar-background-ratio="0.5">
            <!-- Heading -->
            <div class="jumbo-heading" data-stellar-background-ratio="1.2">
               <h1>Order</h1>
            </div>
         </div>
         <!-- container -->
         <div class="container">
            <div class="row">
               <!-- Contact Info -->
               <div class="col-lg-5 col-md-5">
                     <h3>Information </h3>
                     <ul class="list-inline">
                        <li><i class="fa fa-envelope"></i><a href="mailto:youremailaddress">youremail@site.com</a></li>
                        <li><i class="fa fa-phone margin-icon"></i>Call Us +1 456 7890</li>
                        <li><i class="fa fa-map-marker margin-icon"></i>Lorem Ipsum 505</li>
                     </ul>
                     <!-- address info -->
                     <p>Elit uasi quidem minus id omnis a nibh fusce mollis imperdie tlorem ipuset phas ellus ac sodales Lorem ipsum dolor Phas ellus 
                        adipisicing elit uasi quidem minus id omnis a nibh fusce mollis imperdie tlorem ipuset campas fincas
                     </p>
					<img src="img/contactpage1.png" alt="" class="img-rounded center-block img-responsive">             
               </div>
               <!-- /col-lg-5-->
               <!-- Contact Form -->
               <div class="col-lg-6 col-md-6 col-lg-offset-1 col-md-offset-1 res-margin">
			     <h3>Order</h3>
                  <!-- Form Starts -->
                  <!-- <div id="contact_form">
                     <div class="form-group">
                        <label>Name<span class="required">*</span></label>
                        <input type="text" name="name" class="form-control input-field" required="">                    
                        <label>Email Adress <span class="required">*</span></label>
                        <input type="email" name="email" class="form-control input-field" required="">           
                        <label>Subject</label>
                        <input type="text" name="subject" class="form-control input-field" required="">                            
                        <label>Message<span class="required">*</span></label>
                        <textarea name="message" id="message" class="textarea-field form-control" rows="3"  required=""></textarea>
                     </div>
                     <button type="submit" id="submit_btn" value="Submit" class="btn center-block">Order</button>
                  </div> -->

                  <form class="forms-sample" id="form" method="post" action="../slave/order_cust.php?proses=insert" enctype="multipart/form-data">
                          <div class="form-group row">
                            <!-- <label class="col-sm-3 col-form-label">Id Pemesanan</label> -->
                            <div class="col-sm-6">
                              <input type="hidden" class="form-control" placeholder="Enter ID Pesanan">
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Kategori Layanan</label>
                            <div class="col-sm-6">
                              <select name="id_layanan" class="form-control" onchange="getharga()">
                               <option value="">-Pilih Layanan-</option>
                               <?php
                                  foreach(DB::query("SELECT id_layanan,nama_layanan,harga FROM tbl_layanan") as $layanan){
                                    echo "<option harga=\"$layanan[harga]\" value=\"$layanan[id_layanan]\">$layanan[nama_layanan]</option>";
                                  }
                               ?>
                              </select>
                            </div>
                          </div>
                          <!-- <div class="form-group row">
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
                          </div> -->
                          
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
                              <input name="total_harga" type="text" class="form-control" disabled placeholder="Total harga">
                            </div>
                          </div>                          
                          <div id="form-penitipan" style="display:none">
                           <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Check-in</label>
                                 <div class="col-sm-6">
                                 <input type="date" name="checkin" class="form-control">
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Check-out</label>
                                 <div class="col-sm-6">
                                 <input type="date" name="checkout" class="form-control">
                              </div>
                           </div>
                          </div>
                          <button type="submit" class="btn center-block">Order</button>
                          <!-- <button class="btn btn-light">Batal</button> -->
                        </form>
                  <!-- Contact results -->
                  <div id="contact_results"></div>
               </div>
               <!--/col-lg-6 -->             
            </div>
            <!-- /row-->
         </div>
         <!-- /container-->
         <div class="container-fluid margin1">
         </div>
         <!-- /container-fluid-->
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
      <script>
      function getharga(){
         var harga = $('option:selected', $("select[name=id_layanan]")).attr('harga');
         var tipe = $('option:selected', $("select[name=id_layanan]")).text();
         
         if(tipe.includes("Penitipan")){
            $("#form-penitipan").show();
         }

         $("input[name=total_harga]").val(harga);
         console.log(harga);
      }
      </script>
      <script src="js/bootstrap.min.js"></script>
      <!-- Main Js -->
      <script src="js/main.js"></script>
      <!-- Contact form -->
      <script src="js/contact.js"></script>
      <!-- Open street maps-->
      <script src="js/map.js"></script>
      <!--Other Plugins -->
      <script src="js/plugins.js"></script>
      <!-- Prefix free CSS -->
      <script src="js/prefixfree.js"></script>

<!-- Mirrored from ingridkuhn.com/themes/petz/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jul 2020 08:03:40 GMT -->
</html>