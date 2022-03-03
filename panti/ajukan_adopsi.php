<?php

include 'template/header.php';

?>
<!-- isi-->

<section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Pengajuan Adopsi </h1>
          </div>
        </div>
      </div>
    </section>

<div class="col-md-12 mt-md-5">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">List Pengajuan</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-bordered text-center ">
                                    <thead>
                                        <tr>
                                            <th >No</th>
                                            <th>ID</th>
                                            <th>Nama Panti</th>
                                            <th>Nama Anak</th>
                                            <th>Status</th>
                                            <th colspan="3">Opsi</th>
                                        </tr>
                                        <?php
                
                                          include '../koneksi.php';

                                          $nama_panti = $_GET['nama_panti'];
                                          $no = 1;
                                          $query_mysql = mysqli_query($host,"SELECT * from ajuan_adopsi where nama_panti = '$nama_panti' and status not like 'menolak' and status not like 'diterima'");
                                          while($data = mysqli_fetch_array($query_mysql,MYSQLI_ASSOC)){

                                            ?>
                                        <tr>
                                          <th><?php echo $no++ ; ?></th>
                                          <th><?php echo $data['id_ajuan'] ?></th>
                                          <th><?php echo $data['nama_panti'] ?></th>
                                          <th><?php echo $data['nama_anak'] ?></th>
                                          <th><?php echo $data['status'] ?></th>
                                          <th><a href="edit_pengajuan_adopsi.php?id_ajuan=<?php echo $data['id_ajuan']; ?>" class="btn btn btn-outline-success">Terima Adopsi</a></th>
                                          <th><a href="edit_pengajuan_adopsi1.php?id_ajuan=<?php echo $data['id_ajuan']; ?>" class="btn btn btn-outline-danger">Menolak Adopsi</a></th>
                                          <th> <a href="profil.php?nama_adopter=<?php echo $data['nama_adopter']; ?>" class="btn btn btn-outline-info">Liat Profil Adopter</a></th>
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
            <span aria-hidden="true">×</span>
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