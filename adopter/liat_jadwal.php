<?php

include 'template/header.php';

?>
<!-- isi-->

<section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">JADWAL PERJANJIAN </h1>
          </div>
        </div>
      </div>
    </section>

<div class="col-md-12 mt-md-5">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Liat Jadwal</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-bordered text-center ">
                                    <thead>
                                        <tr>
                                            <th >No</th>
                                            <th>ID</th>
                                            <th>Nama Panti</th>
                                            <th>Nama Anak</th>
                                            <th>Tanggal</th>
                                            <th>hari</th>
                                            <th>jam</th>
                                            <th colspan="3">Opsi</th>
                                        </tr>
                                        <?php
                
                                          include '../koneksi.php';

                                          $adopter = $_SESSION['username'];
                                          $no = 1;
                                          $query_mysql = mysqli_query($host,"SELECT * from table_janji where nama_adopter = '$adopter'");
                                          while($data = mysqli_fetch_array($query_mysql,MYSQLI_ASSOC)){

                                            ?>
                                        <tr>
                                          <th><?php echo $no++ ; ?></th>
                                          <th><?php echo $data['id_janji'] ?></th>
                                          <th><?php echo $data['nama_panti'] ?></th>
                                          <th><?php echo $data['nama_anak'] ?></th>
                                          <th><?php echo $data['tanggal'] ?></th>
                                          <th><?php echo $data['hari'] ?></th>
                                          <th><?php echo $data['jam'] ?></th>
                                          
                                          <?php 
                                          if ($data['status'] == 'belum diterima') { ?>
                                          <th><a href="edit_jadwal.php?id_janji=<?php echo $data['id_janji']; ?>" class="btn btn btn-outline-primary">Edit</a></th>
                                          <th><a href="proses/batal_janji.php" class="btn btn btn-outline-danger"  data-toggle="modal" data-target="#deleteModal" onClick="confirm_modal('proses/batal_janji.php?&id_janji=<?php echo $data['id_janji']; ?>');">Batal</a></th></th>
                                            <?php } 
                                            elseif ($data['status'] == 'diterima') { ?>
                                             <th><button class="btn btn-outline-info" >Perjanjian Sudah diterima</button></th>
                                            <?php } 
                                            else {?>
                                              <th><a class="btn btn-outline-info">Status Pengajuan Belum diterima</a></th>
                                            <?php } ?>

                                          <th> <a href="profil_panti.php?nama_panti=<?php echo $data['nama_panti']; ?>" class="btn btn btn-outline-info">Liat Profil Panti</a></th>
                                        </tr>
                                        <?php } ?>

                                    </thead>
                                    <tbody>
                              </div>
                          </div>              
</div>


<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Menghapus Data?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">??</span>
          </button>
        </div>
        <div class="modal-body">Data Akan dihapus Permanent</div>
        <div class="modal-footer">
          <button class="btn btn-outline-danger" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-outline-success" href="" id="delete_link">Delete</a>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#deleteModal').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script> 

<?php
   
   include 'template/footer.php';
   
?>