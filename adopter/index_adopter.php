<?php

include 'template/header.php';

?>
    <!-- END nav -->
    <?php
    
    include '../koneksi.php';
    
    $query_mysql = mysqli_query($host,"SELECT * from event");
    while($data = mysqli_fetch_array($query_mysql,MYSQLI_ASSOC)){

  
    ?>
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(<?php echo '../images/event/'.$data['gambar'];?>);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
			       <h1 class="mb-4"><?php echo $data['judul_event'] ?></h1>
			       <h2 class="align-self-stretch box p-4 text-center"><?php echo $data['deskripsi_event'] ?></h2>
             <a href="detail_event.php?id_event=<?php echo $data['id_event']; ?>"  class="btn btn btn-secondary">Detail Acara</a>
          </div>
        </div>
        </div>
      </div>
      <?php } ?>
    </section>

    
    <div class="justify-content-center pt-md-4 ftco-animate text-center">
            <h1 class="mb-2 bread">Penjelasan Menu DOKU</h1>
          </div>
    <section class="ftco-section contact-section ">
      <div class="container">
        <div class="row d-flex mb-5 contact-info row justify-content-center align-items-center">
          <div class="col-md-10 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center ">
              <h5>Sebelum menggunakan Aplikasi yuk kenali Menu-menu yang ada di aplikasi DOKU.<br>
              Agar lebih paham dengan menunya COTA dapat membaca penjelasannya dibawah ini.
              </h5>
	          </div>
          </div>
        </div>
      </div>
    <div class="justify-content-center pt-md-4 ftco-animate text-center">
            <h1 class="mb-2 bread">Kategori</h1>
          </div>
    <section class="ftco-section contact-section ">
      <div class="container">
        <div class="row d-flex mb-5 contact-info row justify-content-center align-items-center">
          <div class="col-md-10 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center ">
              <h5>
              didalam menu kategori, pengadopsi dapat memilih anak yang akan diadopsi yang terdiri dari anak-anak dan balita.
terdapat menu untuk melihat detail anak-anak dan balita dan panti asuhan tersebut sebelum melakukan pengajuan adopsi.
              </h5>
	          </div>
          </div>
        </div>
      </div>

      <div class="justify-content-center pt-md-4 ftco-animate text-center">
            <h1 class="mb-2 bread">Ajukan Adopsi</h1>
          </div>
    <section class="ftco-section contact-section ">
      <div class="container">
        <div class="row d-flex mb-5 contact-info row justify-content-center align-items-center">
          <div class="col-md-10 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center ">
              <h5>
              dalam menu ini, pengadopsi dapat mengajukan pengadopsian anak yang telah dipilih sebelumnya
status pengajuan pengadopsian dapat dibatalkan dan diedit apabila belum dikonfirmasi oleh pihak panti
jika status diterima, pengadopsi dapat mengajukan perjanjian temu pada pihak panti asuhan.
              </h5>
	          </div>
          </div>
        </div>
      </div>

      <div class="justify-content-center pt-md-4 ftco-animate text-center">
            <h1 class="mb-2 bread">Jadwal Perjanjian</h1>
          </div>
    <section class="ftco-section contact-section ">
      <div class="container">
        <div class="row d-flex mb-5 contact-info row justify-content-center align-items-center">
          <div class="col-md-10 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center ">
              <h5>
              menu ini berisikan data perjanjian yang telah diajukan oleh pengadopsi serta status apabila perjanjian sudah diterima atau tidak
dan dapat melihat profil panti asuhan anak yang telah diajukan.
              </h5>
	          </div>
          </div>
        </div>
      </div>

      <div class="justify-content-center pt-md-4 ftco-animate text-center">
            <h1 class="mb-2 bread">Berkas Tahapan</h1>
          </div>
    <section class="ftco-section contact-section ">
      <div class="container">
        <div class="row d-flex mb-5 contact-info row justify-content-center align-items-center">
          <div class="col-md-10 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center ">
              <h5>
              Setelah pengadopsi selesai melakukan perjanjian dan bertemu pihak panti serta pengadopsian setuju untuk dilakukan, 
pengadopsi akan melewati berbagai macam tahapan sebelum akhirnya COTA berhasil mengadopsi anak. Pada menu ini pengadopsi akan diminta 
untuk memberikan Bukti untuk setiap tahapan yang dilakukan dalam pengadopsian anak, 
bukti ini penting untuk diupload agar panti asuhan dan aplikasi DOKU dapat memantau tahapan yang sudah dilakukan. 
Setelah semua bukti selesai diupload maka COTA wajib menekan tombol selesai agar aplikasi DOKU tau kalau pengadopsian berhasil dilakukan.
              </h5>
	          </div>
          </div>
        </div>
      </div>

      <div class="justify-content-center pt-md-4 ftco-animate text-center">
            <h1 class="mb-2 bread">Riwayat</h1>
          </div>
    <section class="ftco-section contact-section ">
      <div class="container">
        <div class="row d-flex mb-5 contact-info row justify-content-center align-items-center">
          <div class="col-md-10 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center ">
              <h5>
              dalam menu riwayat, terdapat dua sub menu yaitu : riwayat pengadopsian dan riwayat donasi
dalam menu riwayat pengadopsian, pengadopsi dapat melihat riwayat peengadopsian yang telah dilakukan dengan mencetak riwayat pada menu cetak pdf
dan dapat melihat profil panti asuhan.
              </h5>
	          </div>
          </div>
        </div>
      </div>
      
      <div class="justify-content-center pt-md-4 ftco-animate text-center">
            <h1 class="mb-2 bread">Donasi</h1>
          </div>
    <section class="ftco-section contact-section ">
      <div class="container">
        <div class="row d-flex mb-5 contact-info row justify-content-center align-items-center">
          <div class="col-md-10 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center ">
              <h5>
              terdapat 2 menu dalam menu donasi yaitu : pengajuan donasi dan pembayaran donasi
pengajuan donasi adalah mengajukan donasi pada panti asuhan yang ingin didonasikan dan nominal yang akan didonasikan
pembayaran donasi adalah mengunggah bukti donasi yang telah ditransfer.dalam menu riwayat, terdapat dua sub menu yaitu : riwayat pengadopsian dan riwayat donasi
dalam menu riwayat pengadopsian, pengadopsi dapat melihat riwayat peengadopsian yang telah dilakukan dengan mencetak riwayat pada menu cetak pdf
dan dapat melihat profil panti asuhan.
              </h5>
	          </div>
          </div>
        </div>
      </div>
    </section>

<?php

include 'template/footer.php';

?>