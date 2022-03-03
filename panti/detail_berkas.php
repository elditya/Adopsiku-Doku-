<?php

include 'template/header.php';

?>


<div class="container row3">
    <!-- Tahapan 1 -->
    <table>
  <th>
      <?php 
                        
        include "../koneksi.php";
                        
        $kode = $_GET['kode'];
        $query_mysql = mysqli_query($host, "SELECT * FROM tahapan1 WHERE kode ='$kode'");
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){

        ?>
      <div class="ml-md-2 card mb-3" style="max-width: 540px;">
      <form  method="post" enctype="multipart/form-data">
        <div class="row no-gutters">
          <div class="col-md-4">
            <br>
            <br>
            <img src="<?php echo '../images/tahapan/'.$data['tahapan1']; ?>" class="card-img" >
            
          </div>
          <div class="col-md-8">
            <div class=" col-lg-8 card-body row3">
              <h5 class="card-title">Tahapan 1 <br> 
              <input type="hidden" name="id_th2" value="<?php echo $data['id_th1']; ?>">
              <input type="hidden" name="nama_adopter" value="<?php echo $data['nama_adopter']; ?>">
              <input type="hidden" name="nama_panti" value="<?php echo $data['nama_panti']; ?>">
              <input type="hidden" name="nama_anak" value="<?php echo $data['nama_anak']; ?>">
                Tanggal<input class="form-control form-control-user" type="date" name="tgl" value="<?php echo $data['tgl']; ?>"readonly/>
                Jam<input class="form-control form-control-user" type="text" name="jam" value="<?php echo $data['jam']; ?>" readonly/>
                Deskripsi<textarea type="text" name="deskripsi" readonly><?php echo $data['deskripsi']; ?></textarea></h5>
            </div> 
          </div>
          </div>
        </div>
        </form>
        <?php } ?>
      </th>


      <!-- tahpan 2 -->
      <th>
      <?php 
                        
        include "../koneksi.php";
                        
        $kode = $_GET['kode'];
        $query_mysql = mysqli_query($host, "SELECT * FROM tahapan2 WHERE kode ='$kode'");
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){

        ?>
      <div class="ml-md-2 card mb-3" style="max-width: 540px;">
      <form  method="post" enctype="multipart/form-data">
        <div class="row no-gutters">
          <div class="col-md-4">
            <br>
            <br>
            <img src="<?php echo '../images/tahapan/'.$data['tahapan2']; ?>" class="card-img" >
            
          </div>
          <div class="col-md-8">
            <div class=" col-lg-8 card-body row3">
              <h5 class="card-title">Tahapan 2 <br> 
              <input type="hidden" name="id_th2" value="<?php echo $data['id_th2']; ?>">
              <input type="hidden" name="nama_adopter" value="<?php echo $data['nama_adopter']; ?>">
              <input type="hidden" name="nama_panti" value="<?php echo $data['nama_panti']; ?>">
              <input type="hidden" name="nama_anak" value="<?php echo $data['nama_anak']; ?>">
              Tanggal<input class="form-control form-control-user" type="date" name="tgl" value="<?php echo $data['tgl']; ?>"readonly/>
                Jam<input class="form-control form-control-user" type="text" name="jam" value="<?php echo $data['jam']; ?>" readonly/>
                Deskripsi<textarea type="text" name="deskripsi" readonly><?php echo $data['deskripsi']; ?></textarea></h5>
            </div>
            
          </div>
          </div>
        </div>
        </form>
        <?php } ?>
      </th>


      <!-- tahpan 3 -->
      <table>
      <th>
      <?php 
                        
        include "../koneksi.php";
                        
        $kode = $_GET['kode'];
        $query_mysql = mysqli_query($host, "SELECT * FROM tahapan3 WHERE kode ='$kode'");
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){

        ?>
      <div class="card mb-3" style="max-width: 540px;">
      <form  method="post" enctype="multipart/form-data">
        <div class="row no-gutters">
          <div class="col-md-4">
            <br>
            <br>
            <img src="<?php echo '../images/tahapan/'.$data['tahapan3']; ?>" class="card-img" >
            
          </div>
          <div class="col-md-8">
            <div class=" col-lg-8 card-body row3">
              <h5 class="card-title">Tahapan 3 <br>
              <input type="hidden" name="id_th3" value="<?php echo $data['id_th3']; ?>"> 
              <input type="hidden" name="nama_adopter" value="<?php echo $data['nama_adopter']; ?>">
              <input type="hidden" name="nama_panti" value="<?php echo $data['nama_panti']; ?>">
              <input type="hidden" name="nama_anak" value="<?php echo $data['nama_anak']; ?>">
              Tanggal<input class="form-control form-control-user" type="date" name="tgl" value="<?php echo $data['tgl']; ?>"readonly/>
                Jam<input class="form-control form-control-user" type="text" name="jam" value="<?php echo $data['jam']; ?>" readonly/>
                Deskripsi<textarea type="text" name="deskripsi" readonly><?php echo $data['deskripsi']; ?></textarea></h5>
            </div>
            
          </div>
          </div>
        </div>
        </form>
        <?php } ?>
      </th>

      <!-- tahpan 4 -->
      <th>
      <?php 
                        
        include "../koneksi.php";
                        
        $kode = $_GET['kode'];
        $query_mysql = mysqli_query($host, "SELECT * FROM tahapan4 WHERE kode ='$kode'");
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){

        ?>
      <div class="card mb-3" style="max-width: 540px;">
      <form method="post" enctype="multipart/form-data">
        <div class="row no-gutters">
          <div class="col-md-4">
            <br>
            <br>
            <img src="<?php echo '../images/tahapan/'.$data['tahapan4']; ?>" class="card-img" >
            
          </div>
          <div class="col-md-8">
            <div class=" col-lg-8 card-body row3">
              <h5 class="card-title">Tahapan 4 <br> 
              <input type="hidden" name="id_th4" value="<?php echo $data['id_th4']; ?>">
              <input type="hidden" name="nama_adopter" value="<?php echo $data['nama_adopter']; ?>">
              <input type="hidden" name="nama_panti" value="<?php echo $data['nama_panti']; ?>">
              <input type="hidden" name="nama_anak" value="<?php echo $data['nama_anak']; ?>">
              Tanggal<input class="form-control form-control-user" type="date" name="tgl" value="<?php echo $data['tgl']; ?>"readonly/>
                Jam<input class="form-control form-control-user" type="text" name="jam" value="<?php echo $data['jam']; ?>" readonly/>
                Deskripsi<textarea type="text" name="deskripsi" readonly><?php echo $data['deskripsi']; ?></textarea></h5>
            </div>
            
          </div>
          </div>
        </div>
        </form>
        <?php } ?>
      </th>


      <!-- tahpan 5 -->
      <table>
      <th>
      <?php 
                        
        include "../koneksi.php";
                        
        $kode = $_GET['kode'];
        $query_mysql = mysqli_query($host, "SELECT * FROM tahapan5 WHERE kode ='$kode'");
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){

        ?>
      <div class="card mb-3" style="max-width: 540px;">
      <form  method="post" enctype="multipart/form-data">
        <div class="row no-gutters">
          <div class="col-md-4">
            <br>
            <br>
            <img src="<?php echo '../images/tahapan/'.$data['tahapan5']; ?>" class="card-img" >
            
          </div>
          <div class="col-md-8">
            <div class=" col-lg-8 card-body row3">
              <h5 class="card-title">Tahapan 5 <br> 
              <input type="hidden" name="id_th5" value="<?php echo $data['id_th5']; ?>">
              <input type="hidden" name="id_th3" value="<?php echo $data['id_th3']; ?>"> 
              <input type="hidden" name="nama_adopter" value="<?php echo $data['nama_adopter']; ?>">
              <input type="hidden" name="nama_panti" value="<?php echo $data['nama_panti']; ?>">
              <input type="hidden" name="nama_anak" value="<?php echo $data['nama_anak']; ?>">
              Tanggal<input class="form-control form-control-user" type="date" name="tgl" value="<?php echo $data['tgl']; ?>"readonly/>
                Jam<input class="form-control form-control-user" type="text" name="jam" value="<?php echo $data['jam']; ?>" readonly/>
                Deskripsi<textarea type="text" name="deskripsi" readonly><?php echo $data['deskripsi']; ?></textarea></h5>
            </div>
            
          </div>
          </div>
        </div>
        </form>
        <?php } ?>
      </th>


      <!-- tahpan 6 -->

      <th>
      <?php 
                        
        include "../koneksi.php";
                        
        $kode = $_GET['kode'];
        $query_mysql = mysqli_query($host, "SELECT * FROM tahapan6 WHERE kode ='$kode'");
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){

        ?>
      <div class="card mb-3" style="max-width: 540px;">
      <form  method="post" enctype="multipart/form-data">
        <div class="row no-gutters">
          <div class="col-md-4">
            <br>
            <br>
            <img src="<?php echo '../images/tahapan/'.$data['tahapan6']; ?>" class="card-img" >
            
          </div>
          <div class="col-md-8">
            <div class=" col-lg-8 card-body row3">
              <h5 class="card-title">Tahapan 6 <br> 
              <input type="hidden" name="id_th6" value="<?php echo $data['id_th6']; ?>">
              <input type="hidden" name="nama_adopter" value="<?php echo $data['nama_adopter']; ?>">
              <input type="hidden" name="nama_panti" value="<?php echo $data['nama_panti']; ?>">
              <input type="hidden" name="nama_anak" value="<?php echo $data['nama_anak']; ?>">
              Tanggal<input class="form-control form-control-user" type="date" name="tgl" value="<?php echo $data['tgl']; ?>"readonly/>
                Jam<input class="form-control form-control-user" type="text" name="jam" value="<?php echo $data['jam']; ?>" readonly/>
                Deskripsi<textarea type="text" name="deskripsi" readonly><?php echo $data['deskripsi']; ?></textarea></h5>
            </div>
            
          </div>
          </div>
        </div>
        </form>
        <?php } ?>
      </th>
      <br>
      <table>
      <br>
     
</div>


<?php

include 'template/footer.php'

?>