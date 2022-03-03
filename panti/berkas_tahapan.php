<?php

include 'template/header.php';

?>
<!-- isi-->

<section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">BERKAS TAHAPAN </h1>
          </div>
        </div>
      </div>
    </section>

<div class="col-md-12 mt-md-5">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">List pengadopsian</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table   table-bordered  ">
                                    <thead>
                                        <tr class="text-center">
                                            <th >No</th>
                                            <th>ID</th>
                                            <th>Nama Adopter</th>
                                            <th>Nama Anak</th>
                                            <th colspan="2">Opsi</th>
                                        </tr>
                                        <?php
                
                                          include '../koneksi.php';

                                          $panti = $_GET['nama_panti'];
                                          $no = 1;
                                          $query_mysql = mysqli_query($host,"SELECT * from table_janji where nama_panti = '$panti'");
                                          while($data = mysqli_fetch_array($query_mysql,MYSQLI_ASSOC)){

                                            ?>
                                         <tr class="text-center">
                                          <th><?php echo $no++ ; ?></th>
                                          <th><?php echo $data['id_janji'] ?></th>
                                          <th><?php echo $data['nama_adopter'] ?></th>
                                          <th><?php echo $data['nama_anak'] ?></th>
                                          <th> <a href="detail_berkas.php?kode=<?php echo $data['kode']; ?>" class="btn btn btn-outline-success">Lihat Berkas Tahapan</a></th>
                                          <th> <a href="pilih_tahapan.php?kode=<?php echo $data['kode']; ?>" class="btn btn btn-outline-primary">Isi Berkas Tahapan</a></th>
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