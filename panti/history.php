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
                                <strong class="card-title">List history pengadopsian</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table   table-bordered  ">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                            <th>Name Adopter</th>
                                            <th>Nama Anak</th>
                                            <th>Tahapan Selesai</th>
                                            <th class="text-center" colspan="3">Opsi</th>
                                        </tr>
                                        <?php
                
                                          include '../koneksi.php';

                                          $panti = $_GET['nama_panti'];
                                          $no = 1;
                                          $query_mysql = mysqli_query($host,"SELECT * from history  where nama_panti = '$panti'");
                                          while($data = mysqli_fetch_array($query_mysql,MYSQLI_ASSOC)){

                                            ?>
                                        <tr>
                                          <th><?php echo $no++ ; ?></th>
                                          <th><?php echo $data['nama_adopter'] ?></th>
                                          <th><?php echo $data['nama_anak'] ?></th>
                                          <th><?php echo $data['tgl_selesai'] ?></th>
                                          <th><a href="detail_berkas.php?nama_adopter=<?php echo $data['nama_adopter']; ?>" class="btn btn btn-outline-primary">Liat detail Berkas</a></th>
                                          <th><a href="profil.php?nama_adopter=<?php echo $data['nama_adopter']; ?>" class="btn btn btn-outline-info">Liat Profil Adopter</a></th>
                                          <th><a href="proses/pdf_report.php?nama_anak=<?php echo $data['nama_anak']; ?>&nama_adopter=<?php echo $data['nama_adopter']; ?>" target="_blank"  class="btn btn btn-outline-success">Report PDF</a></th>
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