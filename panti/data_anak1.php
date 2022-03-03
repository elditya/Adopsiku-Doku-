<?php

include 'template/header.php'

?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">DATA ANAK-ANAK</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="jumbotron text-center bg-light ">
    
  </section>
  <div class="album py-5 bg-light">
    <div class="container row3">
      <div class="row">
    
  <?php

  

include "../koneksi.php";

$nama_panti = $_GET['nama_panti'];
$query_mysql = mysqli_query($host, "SELECT * FROM table_anak where status_adopsi like 'diadopsi' and nama_panti = '$nama_panti'");

while($data = mysqli_fetch_array($query_mysql,MYSQLI_ASSOC)){

  ?>

<div class="col-md-4 text-uppercase">
          <div class="card" style="width: 18rem;">
              <img src="<?php echo '../images/anak/'.$data['foto_anak']; ?>" width="286px" height="183px" alt="">
             <div class="card-body">
             <p class="btn-outline-primary">Nama : <?php echo $data['nama_anak']; ?>
             <p class="btn-outline-warning">Umur : <?php echo $data['umur_anak']; ?></p>
              <p class="btn-outline-success">Nama Panti : <?php echo $data['nama_panti']; ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="detail_anak.php?id_anak=<?php echo $data['id_anak']; ?>" class="btn btn-sm btn-outline-info">liat detail</a>          
                </div>
              </div>
            </div>
          </div>
          <br> 
        </div>
        <?php } ?>

</div>
</div>
</div> 


<?php

include 'template/footer.php'

?>
