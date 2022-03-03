<?php

include 'template/header.php';

?>
<!-- isi-->


<section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Event</h1>
          </div>
        </div>
      </div>
    </section>
  

  
    <div class="album py-5 bg-light">
      <div class="container row3">
        <div class="row">
  

            <div class="mr-md-4 col-md-4 text-uppercase">
            <img class="mx-auto d-block"  src="../images/event.jpg" alt="" width="350px" height="350px">
            </div>

            <div class="ml-md-5 col-ex-5 text-uppercase">
              <div class="input-group mb-3">
                                  <?php
                                    if(isset($_SESSION['username'])){	
                                  ?>

              <form method="POST" action="proses/edit_event_config.php"  enctype="multipart/form-data">
                          <?php

                          

                          include "../koneksi.php";
                              $id_event = $_GET['id_event'];
                              $query_mysql = mysqli_query($host, "SELECT * FROM event  WHERE id_event ='$id_event'");
                              $data = mysqli_fetch_array($query_mysql);
                          ?>
                                <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon1">Nama Event</span>
                                  <input type="hidden" class="form-control form-control-user" id="id" name="id_event" value="<?php echo $data['id_event'] ?>"" readonly>
                                  <input class="form-control" type="text" id="nama_event" name="nama_event" value="<?php echo $data['nama_event'] ?>" >
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nama Panti Asuhan </span>                                  
                                  <input class="form-control" type="text" id="nama_panti" name="nama_panti" value="<?php echo $data['nama_panti'] ?>" readonly >
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Judul Event</span>                     
                                  <input class="form-control" type="text" name="judul_event" value="<?php echo $data['nama_event'] ?>"  >
                                </div>

                                <div class="input-group mb-3">
                                <span>Judul event akan muncul sebagai thumbnail event</span>   
                                </div>

                                <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon1">Tanggal Event</span>                                  
                                  <input class="form-control" type="date"  name="tanggal_event" value="<?php echo $data['tanggal_event'] ?>"  >
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Deskripsi Event</span>                     
                                  <input class="form-control" type="text" name="deskripsi_event" value="<?php echo $data['deskripsi_event'] ?>"   >
                                </div>

                                <div class="input-group mb-3">
                                <span>Deskripsi event akan muncul sebagai rangkuman isi event pada thumbnail event</span>   
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Isi Event</span>                     
                                  <textarea class="form-control"  name="isi_event" value="<?php echo $data['isi_event'] ?>"  ><?php echo $data['isi_event'] ?></textarea>
                                </div>

                                <div class="input-group mb-3">
                                <span>isinya detail tentang event yang akan berlangsung</span>   
                                </div>
                                
                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Gambar Event</span>                     
                                <input class="form-control" type="file" name="gambar" >
                                <input class="form-control" type="hidden" name="gambar_lama" value="<?php echo $data['gambar'] ?>" >
                                </div>

                                <div class="input-group  mt-md-3 align-items-center justify-content-center">
                                  <input type="submit" value="Submit" class="btn btn-lg btn-outline-info">
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