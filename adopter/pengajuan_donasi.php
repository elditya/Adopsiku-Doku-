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
                                <strong class="card-title">List Panti Asuhan</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table   table-bordered  ">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                            <th>Name Panti</th>
                                            <th>Nomor Telpon</th>
                                            <th>Nama Pengurus</th>
                                            <th>Opsi</th>
                                        </tr>
                                        <?php
                
                                          include '../koneksi.php';

                                          $no = 1;
                                          $query_mysql = mysqli_query($host,"SELECT * from table_panti");
                                          while($data = mysqli_fetch_array($query_mysql,MYSQLI_ASSOC)){

                                            ?>
                                        <tr>
                                          <th><?php echo $no++ ; ?></th>
                                          <th><?php echo $data['nama_panti'] ?></th>
                                          <th><?php echo $data['nomor_telepon'] ?></th>
                                          <th><?php echo $data['username'] ?></th>
                                          <th><a href="pengajuan.php?id_panti=<?php echo $data['id_panti']; ?>" class="btn btn btn-outline-primary">Pengajuan Donasi</a></th>
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