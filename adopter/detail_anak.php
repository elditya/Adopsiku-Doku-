<!DOCTYPE html>
<?php 
	session_start();
?>
<html lang="en">
  <head>
    <title>Kategori Adopter DOKU</title>
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
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/style.css">
    
  </head>
  <body>
  <div class="py-2 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
			    		<div class="col-md-5 pr-4 d-flex topper align-items-center">
			    			<div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
						    <span class="text">Jalan Meruya Selatan No.71, Jakarta Barat</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">adopsiku@email.com</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    
    <div class="container emp-profile">
<form method="post">
                    <?php 
                        
                        include "../koneksi.php";
                        
                        $id = $_GET['id_anak'];
                        $query_mysql = mysqli_query($host, "SELECT * FROM table_anak  WHERE id_anak ='$id'");
                        $nomor = 1;
                        while($data = mysqli_fetch_array($query_mysql)){

                        ?>
                <div class="row">
                    <div class="col-md-4">
                    <div class="profile-img">
                            <img src="<?php echo '../images/anak/'.$data['foto_anak']; ?>" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                    <?php echo $data['nama_anak'] ?>
                                    </h5>
                                    <br>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"  role="tab" aria-controls="home" >Tab1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"  role="tab" aria-controls="profile" >Tab2</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <a class="btn btn-outline-warning" href="anak.php">Menu Sebelumnya</a>
                        <a class=" mt-md-3 btn btn-outline-success" href="anak.php">Adopsi Sekarang</a>
                    </div>
                    
                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                    <div class="ml-md-5 profile-work">
                            <p>Hobby Anak</p>
                            <p><?php echo $data['hobby'] ?></p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $data['nama_anak'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama Panti Asuhan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $data['nama_panti'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Umur</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $data['umur_anak'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Jenis Kelamin</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $data['jk'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Tanggal Lahir</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $data['ttl'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Tempat Lahir</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $data['tl'] ?></p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Agama</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $data['agama'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Silsilah Keluarga</label>
                                            </div>
                                            <div class="col-md-6">
                                            <button type="button" class="btn btn-primary btn-user btn-block col-sm-5 mb-3 mb-sm-0" data-toggle="modal" data-target="#myModal">gambar</button>
                                            </div>
                                            <!-- Modal -->
                                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel">Gambar Silsilah Keluarga <?php echo $data['nama_anak'] ?></h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <center>	
                                                                        <img src="<?php echo '../images/anak/'.$data['sk']; ?>" width ="300px" height="300px" class="img-responsive">
                                                                    </center>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>	
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Kesehatan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $data['kesehatan'] ?></p>
                                            </div>
                                        </div>
                                       
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </form>      
        </div>

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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  

  
    
  </body>
  
</html>