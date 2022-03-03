<?php

include 'template/header.php';

?>
<!-- isi-->

<section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">HISTORY </h1>
          </div>
        </div>
      </div>
    </section>

<div class="col-md-12 mt-md-5">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">List History Donasi</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table   table-bordered  ">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                            <th>Name </th>
                                            <th>Nama Panti</th>
                                            <th>Nominal</th>
                                            <th>Tanggal Selesai Donasi</th>
                                            <th>Bukti Transfer</th>
                                        </tr>
                                        <?php
                
                                          include '../koneksi.php';

                                          $adopter = $_SESSION['username'];
                                          $no = 1;
                                          $query_mysql = mysqli_query($host,"SELECT * from donasi  where pendonasi = '$adopter'");
                                          while($data = mysqli_fetch_array($query_mysql,MYSQLI_ASSOC)){

                                            ?>
                                        <tr>
                                          <th><?php echo $no++ ; ?></th>
                                          <th><?php echo $data['nama'] ?></th>
                                          <th><?php echo $data['nama_panti'] ?></th>
                                          <th><?php echo $data['nominal'] ?></th>
                                          <th><?php echo $data['tgl_selesai'] ?></th>
                                          <th> <img src="<?php echo '../images/file_donasi/'.$data['bukti_struk']; ?>"  width ="100px" height="100px" class="img-responsive"/></th>
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