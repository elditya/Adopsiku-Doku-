<?php

include 'template/header.php';

?>
<!-- isi-->

<section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Donasi </h1>
          </div>
        </div>
      </div>
    </section>

<div class="col-md-12 mt-md-5">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">List Donasi</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table   table-bordered  ">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                            <th>Name Donatur</th>
                                            <th>Nominal</th>
                                            <th>Bukti Transfrer</th>

                                        </tr>
                                        <?php
                
                                          include '../koneksi.php';
                                          $panti = $_GET['nama_panti'];
                                          $no = 1;
                                          $query_mysql = mysqli_query($host,"SELECT * from donasi where nama_panti = '$panti'");
                                          while($data = mysqli_fetch_array($query_mysql,MYSQLI_ASSOC)){

                                            ?>
                                        <tr>
                                          <th><?php echo $no++ ; ?></th>
                                          <th><?php echo $data['nama'] ?></th>
                                          <th><?php echo $data['nominal'] ?></th>
                                          <th><button type="button" class="btn btn-primary btn-user " data-toggle="modal" data-target="#myModal">GAMBAR</button></th>
                                          <!---modal-->
                                          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel">Gambar Bukti Transfer</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <center>	
                                                                    <img src="<?php echo '../images/file_donasi/'.$data['bukti_struk']; ?>"  width ="300px" height="300px" class="img-responsive"/>
                                                                    </center>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>	
                                                                </div>
                                                                </div>
                                                            </div>
                                                          </div>
                                        </tr>
                                        <?php } ?>

                                    </thead>
                                    <tbody>
                              </div>
                          </div>              
</div>

                                                  



<?php
   
   include 'template/footer.php';
   
?>