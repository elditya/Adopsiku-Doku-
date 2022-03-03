<?php

include 'template/header.php';

?>

<?php

include '../koneksi.php';

$kode = $_GET['kode'];
$query_mysql = mysqli_query($host, "SELECT * FROM table_janji  WHERE kode ='$kode'");
while($data = mysqli_fetch_array($query_mysql,MYSQLI_ASSOC)){

?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('../images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">BERKAS TAHAPAN </h1>
          </div>
        </div>
      </div>
    </section>

<div class="container bg-light align-self-stretch box p-4 text-center">

        <div class="justify-content-center pt-md-4 ftco-animate text-center">
        <a href="isi_tahapan1.php?kode=<?php echo $data['kode']; ?>" class="btn btn btn-outline-info">Isi Data Tahapan 1</a>
        </div>

        <div class="justify-content-center pt-md-4 ftco-animate text-center">
        <a href="isi_tahapan2.php?kode=<?php echo $data['kode']; ?>" class="btn btn btn-outline-primary">Isi Data Tahapan 2</a>
        </div>

        <div class="justify-content-center pt-md-4 ftco-animate text-center">
        <a href="isi_tahapan3.php?kode=<?php echo $data['kode']; ?>" class="btn btn btn-outline-danger">Isi Data Tahapan 3</a>
        </div>

        <div class="justify-content-center pt-md-4 ftco-animate text-center">
        <a href="isi_tahapan4.php?kode=<?php echo $data['kode']; ?>" class="btn btn btn-outline-warning">Isi Data Tahapan 4</a>
        </div>

        <div class="justify-content-center pt-md-4 ftco-animate text-center">
        <a href="isi_tahapan5.php?kode=<?php echo $data['kode']; ?>" class="btn btn btn-outline-success">Isi Data Tahapan 5</a>
        </div>

        <div class="justify-content-center pt-md-4 ftco-animate text-center">
        <a href="isi_tahapan6.php?kode=<?php echo $data['kode']; ?>" class="btn btn btn-outline-info">Isi Data Tahapan 6</a>
        </div>
        
</div>
<?php } ?>
<?php

include 'template/footer.php';

?>