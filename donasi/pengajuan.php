<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DOKU</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">
    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light pb-md-3 pt-md-3 " id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<a class="navbar-brand" href="../index.php">DOKU</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
          <div class="ml-md-2 dropdown">
              <a class="btn btn-success" href="../about_us.php">
                ABOUT US</a>
            </div>
            <div class="ml-md-2 dropdown">
              <a class="btn btn-warning" href="donasi.php">
                DONASI PANTI ASUHAN</a>
            </div>
         </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">DONASI</h1>
          </div>
        </div>
      </div>
    </section>
    
    <div class="album py-5 bg-light">
      <div class="container row3">
        <div class="row">
  

            <div class="mr-md-4 col-md-4 text-uppercase">
            <img class="mx-auto d-block"  src="../images/donasi.jfif" alt="" width="350px" height="350px">
            </div>

            <div class="ml-md-5 col-ex-5 text-uppercase">
              <div class="input-group mb-3">
                                

              <form method="POST" action="pengajuan_config.php">
                          <?php

                          

                          include "../koneksi.php";
                              $query = mysqli_query($host, "SELECT max(id_donasi) as idTerbesar FROM donasi");
                              $data = mysqli_fetch_array($query);
                              $id_donasi = $data['idTerbesar'];  
                              
                              $urutan = (int) substr($id_donasi, 3, 3);
                              $urutan++;
                              $huruf = "DON";
                              $id_donasi = $huruf . sprintf("%03s", $urutan);
                              $date = date("d-m-Y");
                              $id = $_GET['id_panti'];
                              $query_mysql = mysqli_query($host, "SELECT * FROM table_panti  WHERE id_panti ='$id'");
                              $data1 = mysqli_fetch_array($query_mysql);
                          ?>
                                <div class="input-group mb-3">
                                    <h5 class="">Harap Baca Terlebih dahulu</h5>
                                </div>
                                <div class="input-group mb-3">
                                    <span>Nomor Rekening DOKU : 88672131</span>
                                </div>
                                <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon1">Nama Pendonasi</span>
                                  <input type="hidden" class="form-control form-control-user" id="id" name="id_donasi" value="<?php echo $id_donasi ?>" readonly>
                                  <input class="form-control" type="hidden" id="pendonasi" name="pendonasi" value="non user"  >
                                  <input class="form-control" type="text" id="nama_adopter" name="nama" >
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nama Panti Asuhan </span>                                  
                                  <input class="form-control" type="text" id="nama_panti" name="nama_panti" value="<?php echo $data1['nama_panti'] ?>" readonly >
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nominal Donasi </span>                                  
                                  <input class="form-control" type="number" name="nominal" >
                                </div>

                                <div class="input-group">
                                  <span class="input-group-text" id="basic-addon1">Tanggal Pengajuan</span>                                  
                                  <input class="form-control" type="text" id="tgl_pengajuan" name="tgl_pengajuan" value="<?php echo $date; ?>" >
                                  <input class="form-control" type="hidden" id="tgl_selesai" name="tgl_selesai" value="-" >
                                  <input class="form-control" type="hidden" id="bukti_struk" name="bukti_struk" value="-" >
                                  <input class="form-control" type="hidden" id="status" name="status" value="0" >
                                </div>



                                <div class="input-group  mt-md-3 align-items-center justify-content-center">
                                  <input type="submit" value="BUAT PENGAJUAN" class="btn btn-lg btn-outline-info">
                                </div>
                    </form>

              </div>
            </div>

  
        </div>
      </div>
    </div> 
  
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
          <div class="col-md-6 col-lg-10">
            <div class="ftco-footer-widget mb-5">
            	<div class="block-23 mb-3">
                <h2 class="ftco-heading-2">Punya Pertanyaan?</h2>
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Jalan Meruya Selatan no.61 Jakarta Barat </span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 812 1307 4205</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">Adopsiku99@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          
        
    </footer>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    
  </body>
</html>