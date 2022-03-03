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
  

  
    <div class="album py-5 bg-light">
      <div class="container row3">
        <div class="row">
  

            <div class="mr-md-4 col-md-3 text-uppercase">
            <img class="mx-auto d-block"  src="../images/donasi.jfif" alt="" width="350px" height="350px">
            </div>

            <div class="ml-md-5 col-ex-5 text-uppercase">
              <div class="input-group mb-3">


              <form method="POST" action="proses/pelunasan_config.php" enctype="multipart/form-data">
                          <?php

                          include "../koneksi.php";

                              $date = date("d-m-Y");
                              $id = $_GET['id_donasi'];
                              $query_mysql = mysqli_query($host, "SELECT * FROM donasi  WHERE id_donasi ='$id' ");
                              $data1 = mysqli_fetch_array($query_mysql);
                          ?>
                                <div class="input-group mb-3">
                                    <h5 class="">Harap Baca Terlebih dahulu</h5>
                                </div>
                                <div class="input-group mb-3">
                                    <span>Nomor Rekening DOKU : 88672131</span>
                                </div>
                                <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon1">Nama Pendonasi</span>
                                  <input type="hidden" class="form-control form-control-user" id="id" name="id_donasi" value="<?php echo $data1['id_donasi'] ?>" readonly>
                                  <input class="form-control" type="text" id="nama_adopter" name="nama" value="<?php echo $data1['nama'] ?>" readonly >
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nama Panti Asuhan </span>                                  
                                  <input class="form-control" type="text" id="nama_panti" name="nama_panti" value="<?php echo $data1['nama_panti'] ?>" readonly >
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nominal Donasi </span>                                  
                                  <input class="form-control" type="number" name="nominal" value="<?php echo $data1['nominal'] ?>" readonly >
                                </div>

                                <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon1">Tanggal Pembayaran</span>                                  
                                  <input class="form-control" type="hidden" id="tgl_pengajuan" name="tgl_pengajuan" value="<?php echo $data1['tgl_pengajuan'] ?>" >
                                  <input class="form-control" type="text" id="tgl_selesai" name="tgl_selesai" value="<?php echo $date ?>" readonly >
                                </div>

                                <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Struk Bukti</span>
                                <input class="form-control" type="file" id="bukti_struk" name="bukti_struk"  >
                                <input class="form-control" type="hidden" id="status" name="status" value="1"  >
                                </div>



                                <div class="input-group  mt-md-3 align-items-center justify-content-center">
                                  <input type="submit" value="DONASI" class="btn btn-lg btn-outline-info">
                                </div>
                    </form>
              </div>
            </div>

  
        </div>
      </div>
    </div> 




<?php
   
   include 'template/footer.php';
   
?>