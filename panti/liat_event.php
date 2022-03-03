<?php

include 'template/header.php';

?>
<!-- isi-->

<section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Event </h1>
          </div>
        </div>
      </div>
    </section>

<div class="col-md-12 mt-md-5">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">List Event</strong>
                            </div>
                            <div class="card-body">
                                <table  class="table table-bordered  ">
                                    <thead>
                                        <tr class="text-center">
                                        <th>No</th>
                                            <th>Name Event</th>
                                            <th>Judul Event</th>
                                            <th>Tanggal Event</th>
                                            <th>Isi Event</th>
                                            <th>Deskripsi Event</th>
                                            <th>Gambar Event</th>
                                            <th colspan="2"></th>

                                        </tr>
                                        <?php
                
                                          include '../koneksi.php';
                                          $panti = $_GET['nama_panti'];
                                          $no = 1;
                                          $query_mysql = mysqli_query($host,"SELECT * from event where nama_panti = '$panti'");
                                          while($data = mysqli_fetch_array($query_mysql,MYSQLI_ASSOC)){

                                            ?>
                                        <tr class="text-center">
                                          <th><?php echo $no++ ; ?></th>
                                          <th><?php echo $data['nama_event'] ?></th>
                                          <th><?php echo $data['judul_event'] ?></th>
                                          <th><?php echo $data['tanggal_event'] ?></th>
                                          <th><?php echo $data['isi_event'] ?></th>
                                          <th><?php echo $data['deskripsi_event'] ?></th>
                                          <th><img src="<?php echo '../images/event/'.$data['gambar']; ?>"  width ="300px" height="200px" /></th>
                                          <th> <a href="edit_event.php?id_event=<?php echo $data['id_event']; ?>" class="btn btn btn-outline-primary">Edit</a></th>
                                          <th> <a href="proses/hapus_event.php" class="btn btn btn-outline-danger"  data-toggle="modal" data-target="#deleteModal" onClick="confirm_modal('proses/hapus_event.php?&id_event=<?php echo $data['id_event']; ?>');">Hapus</a></th>
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
          <a class="btn btn-outline-success" href="proses/batal_janji.php" id="delete_link">Delete</a>
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