<?php

include 'template/header.php';

?>
<?php
                
 include '../koneksi.php';

 $id_event = $_GET['id_event'];
 $sql = mysqli_query($host,"SELECT * from event where id_event = '$id_event'");
 $data = mysqli_fetch_array($sql);
 ?>
        <div class="justify-content-center pt-md-4 ftco-animate text-center">
            <img src="<?php echo '../images/event/'.$data['gambar']; ?>" alt=""/> 
        </div>
        <div class="justify-content-center pt-md-4 ftco-animate text-center">
        <a href="profil_panti.php?nama_panti=<?php echo $data['nama_panti']; ?>" class="btn btn btn-outline-info">Liat Profil Panti</a>
        </div>
    <section class="ftco-section contact-section ">
      <div class="container">
        <div class="row d-flex mb-5 contact-info row justify-content-center align-items-center">
          <div class="col-md-10 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center ">
              <h5><?php echo $data['isi_event'] ?></h5>
	          </div>
          </div>
        </div>
      </div>

<?php

include 'template/footer.php';

?>