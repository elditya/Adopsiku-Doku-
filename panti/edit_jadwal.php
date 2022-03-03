<?php

include 'template/header.php';

?>
<!-- isi-->


<section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread"> PERJANJIAN </h1>
          </div>
        </div>
      </div>
    </section>
  

  
    <div class="album py-5 bg-light">
      <div class="container row3">
        <div class="row">
  

            <div class="mr-md-4 col-md-4 text-uppercase">
            <img class="mx-auto d-block"  src="../images/selamat.jpg" alt="" width="450px" height="350px">
            </div>

            <div class="ml-md-5 col-ex-5 text-uppercase">
              <div class="input-group mb-3">


              <form method="POST" action="proses/edit_jadwal_config.php">
                          <?php

                          include "../koneksi.php";
                          $id = $_GET['id_janji'];
                          $sql = mysqli_query($host,"select * from table_janji where id_janji = '$id'");
                          $data = mysqli_fetch_array($sql);
                          ?>
                                <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon1">Nama</span>
                                  <input type="hidden" class="form-control form-control-user" id="id" name="id_janji" value="<?php echo $data['id_janji'] ?>" readonly>
                                  <input class="form-control" type="text" id="nama_adopter" name="nama_adopter" value="<?php echo $data['nama_adopter'] ?>" readonly>
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nama Panti Asuhan</span>                                  
                                  <input class="form-control" type="text" id="nama_panti" name="nama_panti" value="<?php echo $data['nama_panti'] ?>" readonly >
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nama Anak </span>                                  
                                  <input class="form-control" type="text" id="nama_anak" name="nama_anak" value="<?php echo $data['nama_anak'] ?>" readonly >
                                </div>


                                <div class="input-group mb-3">
                                  <input class="form-control" type="hidden" id="hari" name="hari" value="<?php echo $data['hari'] ?>" readonly >                                 
                                  <input class="form-control" type="hidden" id="jam" name="jam" value="<?php echo $data['jam'] ?>" >
                                  <input class="form-control" type="hidden" id="tgl_janji" name="tgl_janji" value="<?php echo $data['tanggal'] ?>" >
                                </div>
                                

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"> Status </span>                                  
                                  <input class="form-control" type="text" id="status" name="status" value="diterima" readonly >
                                </div>

                                <div class="input-group  mt-md-3 align-items-center justify-content-center">
                                  <input type="submit" value="Terima perjanjian" class="btn btn-lg btn-outline-info">
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