<?php

include 'template/header.php';

?>
<!-- isi-->


<section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Berkas Tahapan </h1>
          </div>
        </div>
      </div>
    </section>
  

  
    <div class="album py-5 bg-light">
      <div class="container row3">
        <div class="row">
  

            <div class="mr-md-4 col-md-4 text-uppercase">
            <img class="mx-auto d-block"  src="../images/donasi.jfif" alt="" width="350px" height="350px">
            </div>

            <div class="ml-md-5 col-ex-5 text-uppercase">
              <div class="input-group mb-3">
                                  <?php
                                    if(isset($_SESSION['username'])){	
                                  ?>

              <form method="POST" action="proses/config_tahapan5.php"  enctype="multipart/form-data">
                          <?php

                          include "../koneksi.php";
                             
                              $kode = $_GET['kode'];
                              $query_mysql = mysqli_query($host, "SELECT * FROM table_janji  WHERE kode ='$kode'");
                              $data = mysqli_fetch_array($query_mysql);
                              
                          ?>

                                <div class="input-group mb-3">
                                    <h5 class="">Isi berkas tahapan 5</h5>
                                </div>
                               
                                <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon1">Nama Adopter</span>
                                  <input type="hidden" class="form-control form-control-user" id="id" name="id_th5" readonly>
                                  <input class="form-control" type="hidden" id="kode" name="kode"  value="<?php echo $data['kode'] ?>"  >
                                  <input class="form-control" type="text" id="nama_adopter" name="nama_adopter" value="<?php echo $data['nama_adopter'] ?>"  >
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nama Panti Asuhan </span>                                  
                                  <input class="form-control" type="text" id="nama_panti" name="nama_panti" value="<?php echo $data['nama_panti'] ?>" readonly >
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"> Nama Anak </span>                                  
                                  <input class="form-control" type="text" name="nama_anak" value="<?php echo $data['nama_anak'] ?>" >
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"> Deskripsi Tahapan </span>                                  
                                  <input class="form-control" type="text" name="deskripsi"  >
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"> Hari Tahapan </span>                                  
                                  <input class="form-control" type="text" name="hari"  >
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"> Tanggal Tahapan </span>                                  
                                  <input class="form-control" type="date" name="tgl"  >
                                </div>

                                <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon1">Jam Tahapan</span>                                  
                                  <input class="form-control" type="time" id="jam" name="jam"  >
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"> Tanggal Tahapan </span>                                  
                                  <input class="form-control" type="file" name="tahapan5"  >
                                </div>



                                <div class="input-group  mt-md-3 align-items-center justify-content-center">
                                  <input type="submit" value="Isi Tahapan" class="btn btn-lg btn-outline-info">
                                </div>
                    </form>
                    <?php } else  ?> 
              </div>
            </div>

  
        </div>
      </div>
    </div> 




<?php
   
   include 'template/footer.php';
   
?>