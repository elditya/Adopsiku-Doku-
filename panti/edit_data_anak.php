<?php 

include 'template/header.php';

?>



<section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">EDIT DATA ANAK </h1>
          </div>
        </div>
      </div>
    </section>


<div class="album py-5 bg-light">
      <div class="container row3">
        <div class="row">

                     <?php

                          include "../koneksi.php";
                          $id = $_GET['id_anak'];
                          $sql = mysqli_query($host,"select * from table_anak where id_anak = '$id'");
                          $data = mysqli_fetch_array($sql);
                          ?>

  

            <div class="mr-md-4 col-md-4 text-uppercase">
                    <img class="mx-auto d-block"  src="<?php echo '../images/anak/'.$data['foto_anak']; ?>" alt="" width="350px" height="300px">
                    <img class="mx-auto d-block mt-md-5"  src="<?php echo '../images/anak/'.$data['sk']; ?>" alt="" width="350px" height="300px">
            </div>
            

            <div class="ml-md-5 col-ex-5 text-uppercase">
              <div class="input-group mb-3">


              <form method="POST" action="proses/edit_data_anak_config.php"  enctype="multipart/form-data">
                         
                            <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon1">Status Anak</span>
                                    <input type="hidden" name="id_anak" value="<?php echo $data['id_anak']; ?>">
                                    <input type="hidden" name="nama_panti" value="<?php echo $data['nama_panti']; ?>">

                                    <select class="form-control" name="status_adopsi" id="adopsi">
                                        <option value="<?php echo $data['status_adopsi']; ?>"><?php echo $data['status_adopsi']; ?></option>
                                        <option value= "diadopsi">diadopsi</option>
                                        <option value= "belum diadopsi">belum diadopsi</option>
                                    </select>
                                </div>



                                <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon1">Nama Anak</span>
                                  <input type="text" class="form-control form-control-user" id="id"  name="nama_anak" value="<?php echo $data['nama_anak']; ?>" readonly>
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Tempat Lahir</span>                                  
                                  <input class="form-control" type="text" id="nama_panti"  name="tl" value="<?php echo $data['tl']; ?>">
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Tanggal Lahir </span>                                  
                                  <input class="form-control" type="date" id="nama_anak"  name="ttl" value="<?php echo $data['ttl']; ?>">
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Umur Anak </span>                                  
                                  <input class="form-control" type="text" id="nama_anak" name="umur_anak" value="<?php echo $data['umur_anak']; ?>">
                                </div>

                                <div class= "input-group mb-3">
                                  <span class="input-group-text" id="basic-addon1">Jenis Kelamin</span>                                  
                                  <input class="form-control" type="text" id="jam" name="jk" value="<?php echo $data['jk']; ?>" >
                                </div>

                                <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon1">Agama</span>                                  
                                  <input class="form-control" type="text" id="tgl_janji" name="agama" value="<?php echo $data['agama']; ?>" >
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Hobby </span>                                  
                                  <input class="form-control" type="text" id="nama_anak" name="hobby" value="<?php echo $data['hobby']; ?>">
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Kesehatan</span>                                  
                                <textarea class="form-control form-control-user" id="kesehatan" name="kesehatan" ><?php echo $data['kesehatan']; ?></textarea>
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Keterangan </span>                                  
                                <textarea class="form-control form-control-user" id="ket" name="ket" ><?php echo $data['ket']; ?></textarea>
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Akte</span>
                                <input class="form-control" type="file"  name="sk" >  
                                  <input class="form-control" type="hidden" id="nama_anak" name="sk_lama" value="<?php echo $data['sk'] ?>">                             
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Foto Anak</span>
                                <input class="form-control" type="file"  name="foto_anak" >
                                  <input class="form-control" type="hidden" id="nama_anak" name="foto_lama" value="<?php echo $data['foto_anak'] ?>">                                  
                                </div>

                                


                                <div class="input-group  mt-md-3 align-items-center justify-content-center">
                                  <input type="submit" value="SIMPAN" class="btn btn-lg btn-outline-info">
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