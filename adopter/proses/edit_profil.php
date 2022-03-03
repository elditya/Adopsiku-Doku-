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
    

    <link rel="stylesheet" href="../../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../../css/animate.css">
    
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../css/magnific-popup.css">

    <link rel="stylesheet" href="../../css/aos.css">

    <link rel="stylesheet" href="../../css/ionicons.min.css">
    
    <link rel="stylesheet" href="../../css/flaticon.css">
    <link rel="stylesheet" href="../../css/icomoon.css">
    <link rel="stylesheet" href="../../css/profile.css">
    <link rel="stylesheet" href="../../css/style.css">
    
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
    
    <div class="container emp-profile text-uppercase">

            <?php
				if(isset($_SESSION['username'])){	
			?>
            <form action="edit_profil_config.php" method="post" enctype="multipart/form-data">
                            
                <?php
                
                include '../../koneksi.php';
                
                $adopter = $_SESSION['username'];
                $sql = mysqli_query($host,"select * from table_adopter where username = '$adopter'");
                $data = mysqli_fetch_array($sql);
                
                ?>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                        <img src="<?php echo '../../images/profil/'.$data['foto']; ?>">
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="foto"/>
                                <input type="hidden" name="foto_lama" value="<?php echo $data['foto'] ?>"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                    <?php echo $data['username'] ?>
                                    </h5>
                                    <h6>
                                        Adopter
                                    </h6>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"  role="tab" aria-controls="home" >About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" Class="btn btn-outline-success"  value="Simpan"/>
                        <br>
                        <br>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active form-group row col-sm-8 mb-3 mb-sm-0" id="home" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>ID</label>
                                            </div>
                                            <div class="col-md-6 ">
                                                <input  type="hidden" name="id_adopter" value="<?php echo $data['id_adopter'] ?>"> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 ">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6 ">
                                            <input class="form-control form-control-user" type="text" name="username" value="<?php echo $data['username'] ?>"> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input class="form-control form-control-user" type="email" name="email" value="<?php echo $data['email'] ?>"> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input class="form-control form-control-user" type="text" name="telepon" value="<?php echo $data['telepon'] ?>"> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Tanggal Lahir</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input class="form-control form-control-user" type="date" name="TTL" value="<?php echo $data['TTL'] ?>">
                                            <input class="form-control form-control-user" type="hidden" name="role" value="<?php echo $data['role'] ?>">  
                                            </div>
                                        </div>
                                        
                            </div>
                                        <br>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <?php } else  ?>              
        </div>

  <script src="../../js/jquery.min.js"></script>
  <script src="../../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <script src="../../js/jquery.easing.1.3.js"></script>
  <script src="../../js/jquery.waypoints.min.js"></script>
  <script src="../../js/jquery.stellar.min.js"></script>
  <script src="../../js/owl.carousel.min.js"></script>
  <script src="../../js/jquery.magnific-popup.min.js"></script>
  <script src="../../js/aos.js"></script>
  <script src="../../js/jquery.animateNumber.min.js"></script>
  <script src="../../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../../js/google-map.js"></script>
  <script src="../../js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  

  
    
  </body>
  
</html>