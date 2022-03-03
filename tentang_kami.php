<!DOCTYPE html>
<html lang="en">
  <head>
    <title>About us DOKU</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light pb-md-3 pt-md-3 " id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<a class="navbar-brand" href="index.php">DOKU</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
          <div class="ml-md-2 dropdown">
              <a class="btn btn-success" href="tentang_kami.php">
                TENTANG KAMI</a>
            </div>
            <div class="ml-md-2 dropdown">
              <a class="btn btn-warning" href="donasi/donasi.php">
                DONASI PANTI ASUHAN</a>
            </div>
         </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">TENTANG KAMI</h1>
          </div>
        </div>
      </div>
    </section>
    <div class="justify-content-center pt-md-4 ftco-animate text-center">
            <h1 class="mb-2 bread">DOKU</h1>
          </div>
    <section class="ftco-section contact-section ">
      <div class="container">
        <div class="row d-flex mb-5 contact-info row justify-content-center align-items-center">
          <div class="col-md-10 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center ">
              <h3>Aplikasi DOKU adalah aplikasi yang menjadi perantara antara pengadopsi anak dan panti asuhan</h3>
	          </div>
          </div>
          </div>
        </div>
      </div>
    <div class="justify-content-center pt-md-4 ftco-animate text-center">
            <h1 class="mb-2 bread">Develpoer</h1>
          </div>
    <section class="ftco-section contact-section ">
      <div class="container">
        <div class="row d-flex mb-5 contact-info row justify-content-center align-items-center">
        <?php
                
                include 'koneksi.php';

                $query_mysql = mysqli_query($host,"SELECT * from table_admin ");
                while($data = mysqli_fetch_array($query_mysql,MYSQLI_ASSOC)){

                  ?>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center ">
              <img class="img-circle"  src="images/profil.png" alt="" width="150px" height="220px">
          		<h3 class="mb-4"><?php echo $data['nama_lengkap'] ?></h3>
	            <p><?php echo $data['Job'] ?></p>
              <p><a href="mailto:<?php echo $data['email'] ?>"><?php echo $data['email'] ?></a></p>
              
	          </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>