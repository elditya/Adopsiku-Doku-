<?php 
	session_start();
        if($_SESSION['username']==""){
header("location:../login/login.php?pesan=gagal");
}

      elseif($_SESSION['role']!="admin"){
header("location:../blocked.php");
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" href="../public/vendors/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../public/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../public/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../public/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../public/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../public/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="../public/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="home_admin.php">DOKU</a>
                <a class="navbar-brand hidden" href="home_admin.php">D</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    
                   
                    <li class="menu-item-has-children active dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Data User</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="data_adopter.php">Data Adopter</a></li>
                            <li><i class="fa fa-table"></i><a href="data_panti.php">Data Panti Asuhan</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="data_perjanjian.php" > <i class="menu-icon fa fa-table"></i>Data Perjanjian</a>
                    </li>
                    <li class="">
                        <a href="history.php" > <i class="menu-icon fa fa-table"></i>Riwayat</a>
                    </li>
                    <li class="">
                        <a href="data_anak.php"> <i class="menu-icon fa fa-table"></i>Data Anak</a>
                    </li>
                   
                    <li class="">
                        <a href="donasi.php"> <i class="menu-icon fa fa-table"></i>Data Donasi</a>
                    </li>
                    <li class="">
                        <a href="data_event.php"> <i class="menu-icon fa fa-table"></i>Data Acara</a>
                    </li>
                     <li class="">
                        <a href="laporan.php" > <i class="menu-icon fa fa-table"></i>Laporan Tahapan</a>
                    </li>
                    


                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                    </div>
                </div>

                <div class="col-sm-5">
                <?php
						if(isset($_SESSION['username'])){	
					?>
                    <div class="user-area dropdown float-right">
                    <a  href=""class=" ml-md-5 nav-item active"  data-toggle="modal" data-target="#dropModal" ><?php echo $_SESSION['username'] ?></span>
                <?php
                
                include '../koneksi.php';

                $adopter = $_SESSION['username'];
                $sql = mysqli_query($host,"select * from table_adopter where username = '$adopter'");
                $data = mysqli_fetch_array($sql);
                $no = 1;
                
                ?>
                
                <img class="ml-md-2 img-profile rounded-circle" src="<?php echo '../images/profil/'.$data['foto']; ?>" width="40px" height="40px">
              </a>
                    </div>

                    <?php } else  ?>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->