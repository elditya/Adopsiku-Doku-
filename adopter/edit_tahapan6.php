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
            <img class="mx-auto d-block"  src="../images/upload.jpg" alt="" width="250px" height="250px">
            </div>

            <div class="ml-md-5 col-ex-5 text-uppercase">
              <div class="input-group mb-3">
                                  <?php
                                    if(isset($_SESSION['username'])){	
                                  ?>

              <form method="POST" action="proses/config_tahapan6.php"  enctype="multipart/form-data">
                          <?php

                          include "../koneksi.php";
                             
                              $kode = $_GET['kode'];
                              $query_mysql = mysqli_query($host, "SELECT * FROM tahapan6  WHERE kode ='$kode'");
                              $data = mysqli_fetch_array($query_mysql);
                              
                          ?>

                                <div class="input-group mb-3">
                                    <h5 class="">Mengunggah Bukti Foto Berkas Tahapan 1</h5>
                                </div>
                               
                                  <input type="hidden" class="form-control form-control-user" id="id" name="id_th6" value="<?php echo $data['id_th6'] ?>" readonly>
                                  <input class="form-control" type="hidden" id="kode" name="kode"  value="<?php echo $data['kode'] ?>"  >
                                  <input class="form-control" type="hidden" id="nama_adopter" name="nama_adopter" value="<?php echo $data['nama_adopter'] ?>"  readonly    >

                                <div class="input-group mb-3">                                
                                  <input class="form-control" type="hidden" id="nama_panti" name="nama_panti" value="<?php echo $data['nama_panti'] ?>" readonly >
                                </div>

                                <div class="input-group mb-3">                                 
                                  <input class="form-control" type="hidden" name="nama_anak" value="<?php echo $data['nama_anak'] ?>"  readonly >
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Deskripsi Tahapan</span>                                   
                                  <textarea class="form-control" name="deskripsi" id="" cols="30" rows="3" value="<?php echo $data['deskripsi'] ?>" readonly><?php echo $data['deskripsi'] ?></textarea>
                                </div>

                                <div class="input-group mb-3">                                 
                                  <input class="form-control" type="hidden" name="hari" value="<?php echo $data['hari'] ?>"  readonly >
                                </div>

                                <div class="input-group ">                                 
                                  <input class="form-control" type="hidden" name="tgl" value="<?php echo $data['tgl'] ?>" readonly  >
                                </div>

                                <div class="input-group ">                                
                                  <input class="form-control" type="hidden" id="jam" name="jam" value="<?php echo $data['jam'] ?>" readonly  >
                                </div>
                                <div class="input-group ">
                                <span class="input-group-text" id="basic-addon1"> Foto Tahapan </span>                                  
                                  <input class="form-control" type="file" name="tahapan6"  >
                                </div>



                                <div class="input-group  mt-md-3 align-items-center justify-content-center">
                                  <input type="submit" value="Mengunggah Bukti Tahapan" class="btn btn-lg btn-outline-info">
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