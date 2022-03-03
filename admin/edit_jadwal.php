<?php

include 'template/header.php'

?>

        <form action="../proses/edit_buat_janji_admin.php" method="post">
<div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="../public/img/admin.png" alt=""/>
                        </div>
                    </div>
  <div class="form-group row col-sm-6 mb-3 mb-sm-0">

  <?php

          include "../koneksi.php";
          $id = $_GET['id_janji'];
          $sql2 = mysqli_query($host,"select * from table_janji where id_janji = '$id'");
          $data2 = mysqli_fetch_array($sql2);
          $query_mysql = mysqli_query($host, "SELECT * FROM table_panti");
          $query_mysql1 = mysqli_query($host, "SELECT * FROM table_anak");
    ?>

    <input type="hidden" name="id_janji" value="<?php echo $data2['id_janji']; ?>">

    <label for="username">Nama Adopter</label>
    <input class="form-control" type="text" id="nama_adopter" name="nama_adopter" value="<?php echo $data2['nama_adopter']; ?>"><?php echo $data2['nama_adopter']; ?>

    <label for="nama_panti">Nama Panti asuhan</label>
    <select class="form-control" id="nama_panti" name="nama_panti">
    <option value="<?php echo $data2['nama_panti']; ?>"><?php echo $data2['nama_panti']; ?></option>
    <?php while($data = mysqli_fetch_assoc($query_mysql) ){?>

        <option value="<?php echo $data['nama_panti']; ?>" name = "nama_panti"><?php echo $data['nama_panti']; ?></option>
        

    <?php } ?>

    </select>
    <br>
    <label for="nama_anak">Nama Anak</label>
    <select class="form-control" id="nama_panti" name="nama_anak">
    <option value="<?php echo $data2['nama_anak']; ?>"><?php echo $data2['nama_anak']; ?></option>
    <?php while($data1 = mysqli_fetch_assoc($query_mysql1) ){?>

        <option value="<?php echo $data1['nama_anak']; ?>" name = "nama_anak"><?php echo $data1['nama_anak']; ?></option>
        

    <?php } ?>

    </select>
    <br>
    <label for="hari">Hari Perjanjian</label>
    <select class="form-control" id="hari" name="hari">
    <option value="<?php echo $data2['hari']; ?>"><?php echo $data2['hari']; ?></option>
      <option value= "senin">Senin</option>
      <option value= "selasa">Selasa</option>
      <option value= "rabu">rabu</option>
      <option value= "kamis">kamis</option>
      <option value= "jumat">jumat</option>
    </select>
    <br>
    <label for="jam">Jam Perjanjian</label>
    <select class="form-control" id="jam" name="jam">
    <option value="<?php echo $data2['jam']; ?>"><?php echo $data2['jam']; ?></option>
      <option value= "09:00">09:00</option>
      <option value= "12:00">12:00</option>
      <option value= "14:00">14:00</option>
      <option value= "16:00">16:00</option>
      <option value= "19:00">19:00</option>
      <option value= "20:00">20:00</option>
    </select>
    <br>
    <label for="tgl_janji">Tanggal Perjanjian</label>
    <input type="date" class="form-control form-control-user" id="tgl_janji" name="tanggal" value="<?php echo $data2['tanggal']; ?>" >
    <br>
    <br>
    <input type="submit" value="edit" class="btn btn-primary btn-user btn-block col-sm-2 mb-3 mb-sm-0 " >
  </div>


</form>
<?php

include 'template/footer.php'

?>