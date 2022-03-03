<?php

include 'template/header.php';


?>


        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <body>
<div class="container emp-profile">

<?php
						if(isset($_SESSION['username'])){	
					?>
            <form method="post">
                            
                <?php
                
                include '../koneksi.php';

                $adopter = $_SESSION['username'];
                $sql = mysqli_query($host,"select * from table_admin where username = '$adopter'");
                $data = mysqli_fetch_array($sql);
                
                ?>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="<?php echo '../public/file/admin/'.$data['foto']; ?>" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                    <?php echo $data['username'] ?>
                                    </h5>
                                    <br>
                                    <h6>
                                        Admin
                                    </h6>
                                    <br>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"  role="tab" aria-controls="home" >About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                    <div class="profile-img marg">
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>ID</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $data['id_admin'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama Admin</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $data['username'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $data['email'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Job</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $data['Job'] ?></p>
                                            </div>
                                        </div>
                            </div>
                            
                                
                            </div>
                        </div>
                    </div>
                </div>
            </form>  
            <?php } else  ?>          
        </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

    </div><!-- /#right-panel -->

    <?php
    
    include 'template/footer.php';
    
    
    ?>