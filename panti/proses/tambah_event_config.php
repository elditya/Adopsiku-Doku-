<?php 

include '../../koneksi.php';

$id_event = $_POST['id_event'];
$nama_panti = $_POST['nama_panti'];
$nama_event = $_POST['nama_event'];
$judul_event = $_POST['judul_event'];
$tanggal_event = $_POST['tanggal_event'];
$isi_event = $_POST['isi_event'];
$deskripsi_event = $_POST['deskripsi_event'];



if(!empty($_FILES["gambar"]["name"])){
    $gambar = $_FILES["gambar"]["name"];
    move_uploaded_file($_FILES["gambar"]["tmp_name"],'./../../images/event/'.$gambar);
}


mysqli_query($host, "INSERT INTO event VALUES('$id_event','$nama_panti','$nama_event','$judul_event','$tanggal_event','$isi_event','$deskripsi_event','$gambar')");

header("location:../index_panti.php?");

?>