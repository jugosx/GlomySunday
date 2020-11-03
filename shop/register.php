<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Petshop Mechin 4 | Registrasi</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.addons.css">
    <style>
      /*Penghalang*/
      .penghalang {
          display: none;
          position: fixed;
          z-index: 1;
          left: 0;
          top: 0;
          width: 100%;
          height: 100%;
          overflow: auto;
          background-color: rgb(0,0,0);
          background-color: rgba(0,0,0,0.4);
      }

      /*Modal */
      .modal-contenttt {
          background-color: #fefefe;
          margin: 15% auto;
          padding: 20px;
          border: 1px solid #888;
          width: 65%;
      }

      /*Tombol X*/
      #tutup {
          color: #aaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
      }

      #tutup:hover,
      #tutup:focus {
          color: black;
          cursor: pointer;
      }
    </style>
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <h2 class="text-center mb-4">REGISTRASI USER</h2>
              <div class="auto-form-wrapper">
                <form method="POST" action="../slave/slave_register.php?proses=insert">
                  <div class="form-group">
                      <div class="input-group">
                      <input type="text" required name="nama" class="form-control" placeholder="Nama">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                        </div>
                    <div class="form-group">
                    <div class="input-group">
                      <input type="text" required name="alamat" class="form-control" placeholder="Alamat">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="input-group">
                      <input required name="notelp" type="number" class="form-control" placeholder="No HP">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                    </div>  
                    <div class="form-group">
                    <div class="input-group">
                      <input type="email" required name="email" class="form-control" placeholder="Email">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="password" required name="password" class="form-control" placeholder="Password">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group d-flex justify-content-center">
                    <div class="form-check form-check-flat mt-0">
                      <label class="">
                        <input type="checkbox" name="term" required> <a href="javascript:" id="term" class="term">I agree to the terms</a> </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary submit-btn btn-block">Register</button>
                    <button class="btn btn-danger submit-btn btn-block">Batal</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- Modal S&K -->
    <div id="myModal" class="penghalang">
        <div class="modal-contenttt">
            <span id="tutup">&times;</span>
            <div>
            <div><h1><center>Syarat & Ketentuan (Pinitipan/Grooming)</center></h1></div>
            <ol>
            <li>Kucing.&nbsp;/&nbsp;anjing&nbsp;tidak&nbsp;dalam&nbsp;keadaan&nbsp;hamil/&nbsp;melahirkan</li>
            <li>Kucing&nbsp;/&nbsp;anjing&nbsp;tidak&nbsp;dalam&nbsp;keadaan&nbsp;sakit&nbsp;yang&nbsp;lumayan&nbsp;parah</li>
            <li>Apabila&nbsp;Kucing/anjing&nbsp;yang&nbsp;sedang&nbsp;dalam&nbsp;perawatan&nbsp;tiba2&nbsp;sakit&nbsp;,&nbsp;maka&nbsp;akan&nbsp;langsung&nbsp;di&nbsp;bawa&nbsp;ke&nbsp;dokter&nbsp;hewan&nbsp;atau&nbsp;rumah&nbsp;sakit&nbsp;dan&nbsp;biaya&nbsp;di&nbsp;tanggung&nbsp;pemilik&nbsp;hewan.</li>
            <li>Kucing/anjing&nbsp;yang&nbsp;dititipkan&nbsp;melebihi&nbsp;2&nbsp;bulan&nbsp;dan&nbsp;tanpa&nbsp;konfirmasi&nbsp;maka&nbsp;kucing/anjing&nbsp;menjadi&nbsp;milik&nbsp;petshop&nbsp; &nbsp; &nbsp; &nbsp; 
            </li><li>Kucing/anjing&nbsp;yang&nbsp;dititipkan&nbsp;lebih&nbsp;dari&nbsp;2&nbsp;minggu&nbsp;harus&nbsp;membayar&nbsp;setengah&nbsp;dari&nbsp;biaya&nbsp;(dp)</li>
            </ol>
            </div>
        </div>
    </div>
    <div class="modal fade" id="snk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- /Modal S&K -->

    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../assets/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="../assets/js/shared/off-canvas.js"></script>
    <script src="../assets/js/shared/misc.js"></script>
    <script>
      // function snk() {
        var modal = document.getElementById('myModal');
        var btn = document.getElementById("term");
        var span = document.getElementById("tutup");

        btn.onclick = function() {
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(e) {
            if (e.target == modal) {
                modal.style.display = "none";
            }
        }
      // }
    </script>
    <!-- endinject -->
  </body>
</html>