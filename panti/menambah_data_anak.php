<?php 

include 'template/header.php';

?>



<section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">MENAMBAH DATA ANAK </h1>
          </div>
        </div>
      </div>
    </section>


<div class="album py-5 bg-light">
      <div class="container row3">
        <div class="row">

        <div class="mr-md-4 col-md-4 text-uppercase">
            <img class="mx-auto d-block"  src="../images/kartun_anak.png" alt="" width="350px" height="250px">
            </div>
                     <?php

                          include "../koneksi.php";
                          $query = mysqli_query($host, "SELECT max(id_anak) as idTerbesar FROM table_anak");
                        $data = mysqli_fetch_array($query);
                        $id_anak = $data['idTerbesar'];  
                        
                        $urutan = (int) substr($id_anak, 3, 3);
                        $urutan++;
                        $huruf = "ANK";
                        $id_anak = $huruf . sprintf("%03s", $urutan); 

                        $id_panti = $_GET['id_panti'];
                        $sql = mysqli_query($host, "SELECT * FROM table_panti where id_panti = '$id_panti' ");
                        $data1 = mysqli_fetch_array($sql);
                                    ?>

  

            <div class="ml-md-5 col-ex-5 text-uppercase">
              <div class="input-group mb-3">


              <form method="POST" action="proses/menambah_data_anak_config.php" enctype="multipart/form-data">
                         
                            <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon1">Nama Panti</span>
                                    <input type="hidden" name="id_anak" value="<?php echo $id_anak ?>">
                                    <input class="form-control" type="text" name="nama_panti" value="<?php echo $data1['nama_panti']; ?> " required>
                                </div>


                                <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon1">Nama Anak</span>
                                  <input type="text" class="form-control" id="id"  name="nama_anak" required >
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Tempat Lahir</span>                                  
                                  <input class="form-control" type="text" id="nama_panti"  name="tl" required >
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Tanggal Lahir </span>                                  
                                  <input class="form-control" type="date" id="nama_anak"  name="ttl" required >
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Umur Anak </span>                                  
                                  <input class="form-control" type="text" id="nama_anak" name="umur_anak" required >
                                </div>

                                <div class= "input-group mb-3">
                                  <span class="input-group-text" id="basic-addon1">Jenis Kelamin</span>                                  
                                  <input class="form-control" type="text" id="jam" name="jk" required >
                                </div>

                                <div class="input-group mb-3">
                                  <span class="input-group-text" id="basic-addon1">Agama</span>                                  
                                  <input class="form-control" type="text" id="tgl_janji" name="agama" required >
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Hobby </span>                                  
                                  <input class="form-control" type="text" id="nama_anak" name="hobby" required >
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Kesehatan</span>                                  
                                <textarea class="form-control form-control-user" id="kesehatan" name="kesehatan" required ></textarea>
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Keterangan </span>                                  
                                <textarea class="form-control form-control-user" id="ket" name="ket" required ></textarea>
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Akte</span>                            
                                  <input class="form-control" type="file" id="nama_anak" name="sk" required >
                                </div>

                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Foto Anak</span>
                                  <input class="form-control" type="file" id="nama_anak" name="foto_anak" required >
                                </div>

                                <input type="hidden" name="status" value="belum diadopsi">

                                


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