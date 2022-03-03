<?php

include 'template/header.php'

?>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <body>
<div class="container emp-profile">
            <form method="post">
                            
                <?php
                
                include '../koneksi.php';

                $nama_anak = $_GET['nama_anak'];
                $sql = mysqli_query($host,"select * from table_anak where nama_anak = '$nama_anak'");
                $data = mysqli_fetch_array($sql);
                
                ?>
                <div class="row">
                    <div class="col-md-4">
                        <div >
                            <img src="<?php echo '../public/file/anak/'.$data['foto_anak']; ?>" width="175px" height="200px"  />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                    <?php echo $data['nama_anak'] ?>
                                    </h5>
                                    <br>
                                    <h6>
                                        Anak
                                    </h6>
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
                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                    <div class="profile-work">
                            <p>Hobby Anak</p>
                            <a ><?php echo $data['hobby'] ?></a>
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
                                                                        <img src="<?php echo '../public/file/anak/'.$data['sk']; ?>" width ="300px" height="300px" class="img-responsive">
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
            </form>           
        </div>


                </div>
                <?php

include 'template/footer.php'

?>