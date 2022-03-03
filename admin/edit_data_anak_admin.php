<?php

include 'template/header.php'

?>

        <form action="update_data_anak_admin.php" method="post" enctype="multipart/form-data">
<?php
                
                include '../koneksi.php';

                $id = $_GET['id_anak'];
                $sql = mysqli_query($host,"select * from table_anak where id_anak = '$id'");
                $data = mysqli_fetch_array($sql);
                
                ?>
<div class="row">
                    <div class="col-md-4">
                        <img src="../public/img/adopter.png" width="400px" alt="">
                        <input type="submit" value="Simpan" class="btn btn-primary btn-user btn-block col-sm-5 mb-3 mb-sm-0 row3 " >
                    </div>
  <div class="form-group row col-sm-6 mb-3 mb-sm-0">
  <input type="hidden" name="id_anak" value="<?php echo $data['id_anak']; ?>">
  <input type="hidden" name="nama_panti" value="<?php echo $data['nama_panti']; ?>">
  <label for="nama_anak">Nama Anak</label>
    <input type="text" class="form-control form-control-user" id="nama_anak" name="nama_anak" value="<?php echo $data['nama_anak']; ?>">
    <br>
    <label for="tl">Tempat Lahir</label>
    <input type="text" class="form-control form-control-user" id="tl" name="tl" value="<?php echo $data['tl']; ?>">
    <br>
    <label for="umur_anak">Tanggal Lahir</label>
    <input type="date" class="form-control form-control-user" id="ttl" name="ttl" value="<?php echo $data['ttl']; ?>">
    <br>
    <label for="umur_anak">Umur Anak</label>
    <input type="text" class="form-control form-control-user" id="umur_anak" name="umur_anak" value="<?php echo $data['umur_anak']; ?>">
    <br>
    <label for="jenis_kelamin">Jenis Kelamin</label>
    <input type="text" class="form-control form-control-user" id="jenis_kelamin" name="jk" value="<?php echo $data['jk']; ?>">
    <br>
    <label for="agama">Agama</label>
    <input type="text" class="form-control form-control-user" id="agama" name="agama" value="<?php echo $data['agama']; ?>">
    <br>
    <label for="hobby">Hobby</label>
    <input type="text" class="form-control form-control-user" id="hobby" name="hobby" value="<?php echo $data['hobby']; ?>">
    <br>
    <label for="kesehatan">Kesehatan</label>
    <textarea class="form-control form-control-user" id="kesehatan" name="kesehatan" ><?php echo $data['kesehatan']; ?></textarea>
    <br>
    <label for="ket">Keterangan</label>
    <textarea class="form-control form-control-user" id="ket" name="ket" ><?php echo $data['ket']; ?></textarea>
  
                          <img src="<?php echo '../public/file/anak/'.$data['sk']; ?>" width="286px" height="183px" alt="">
                               &nbsp; Silsilah Keluarga
                                <input type="file" id="sk" name="sk" value="<?php echo $data['sk']; ?>"/>
                                <br>
                        <img src="<?php echo '../public/file/anak/'.$data['foto_anak']; ?>" width="286px" height="183px" alt="">
                        &nbsp;  Foto Anak
                                <input type="file" id="foto_anak" name="foto_anak" value="<?php echo $data['foto_anak']; ?>"/>
  <br>
  <br>
</form>
<?php

include 'template/footer.php'

?>