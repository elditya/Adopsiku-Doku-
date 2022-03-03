<!DOCTYPE html>
<?php 
	session_start();
        if($_SESSION['username']==""){
header("location:../login/login.php?pesan=gagal");
}

      elseif($_SESSION['role']!="panti"){
header("location:../blocked.php");
}
?>
<html lang="en">
  <head>
    <title>Pilih Kategori</title>
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
    <?php
						if(isset($_SESSION['username'])){	
					?>
          <?php
                
                include '../koneksi.php';

                $panti = $_SESSION['username'];
                $sql = mysqli_query($host,"SELECT * from table_panti where username = '$panti'");
                $data = mysqli_fetch_array($sql);
                $no = 1;
                
                ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light text-uppercase " id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<a class="navbar-brand" href="index_panti.php">DOKU</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">

          <div class="dropdown">
              <span class="btn btn-outline-primary dropdown-toggle"   role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Data anak </span>

              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item " href="data_anak.php?nama_panti=<?php echo $data['nama_panti']; ?>">Liat Data anak</a></li>
                <li><a class="dropdown-item " href="data_anak1.php?nama_panti=<?php echo $data['nama_panti']; ?>">Data Anak Teradopsi</a></li>
              </ul>
            </div>

            <div class="ml-md-2 dropdown">
              <span class="btn btn-outline-success dropdown-toggle"   role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Pengadopsian </span>

              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item " href="liat_jadwal.php?nama_panti=<?php echo $data['nama_panti']; ?>">Jadwal Perjanjian</a></li>
                <li><a class="dropdown-item " href="ajukan_adopsi.php?nama_panti=<?php echo $data['nama_panti']; ?>">Pengajuan Adopsi</a></li>
              </ul>
            </div>


            <div class="ml-md-2 dropdown">
              <a class="btn btn-outline-warning dropdown" href="berkas_tahapan.php?nama_panti=<?php echo $data['nama_panti']; ?>">
                BERKAS TAHAPAN </a>
            </div>

	        	 <div class="ml-md-2 dropdown">
              <a class="btn btn-outline-danger "  href="history.php?nama_panti=<?php echo $data['nama_panti']; ?>">
                Riwayat Adopsi </a>

            </div>

            <div class="ml-md-2 dropdown">
              <a class="btn btn-outline-info dropdown" href="donasi.php?nama_panti=<?php echo $data['nama_panti']; ?>"   >
                donasi </a>
            </div>

            <div class=" ml-md-2 dropdown">
              <span class="btn btn-outline-primary dropdown-toggle"   role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Acara </span>

              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item " href="tambah_event.php?nama_panti=<?php echo $data['nama_panti']; ?>">Tambah Acara Panti</a></li>
                <li><a class="dropdown-item " href="liat_event.php?nama_panti=<?php echo $data['nama_panti']; ?>">Liat Data Acara</a></li>
                
              </ul>
            </div>
	        </ul>
         
            
                <a  href=""class=" ml-md-5 nav-item active"  data-toggle="modal" data-target="#dropModal" ><?php echo $data['nama_panti']; ?></span>
                <img class="ml-md-2 img-profile rounded-circle" src="<?php echo '../images/file_panti/profil_panti/'.$data['foto_pf']; ?>" width="40px" height="40px">
              </a>
              <?php } else  ?>
              <!-- Dropdown - User Information -->
              </div>
            </li>
	      </div>
	    </div>
	  </nav>