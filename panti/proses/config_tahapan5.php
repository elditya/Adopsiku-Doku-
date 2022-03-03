<?php 

include '../../koneksi.php';

$id_th5 = $_POST['id_th5'];
$nama_adopter = $_POST['nama_adopter'];
$nama_panti = $_POST['nama_panti'];
$nama_anak = $_POST['nama_anak'];
$hari = $_POST['hari'];
$tgl = $_POST['tgl'];
$jam = $_POST['jam'];
$kode = $_POST['kode'];
$deskripsi = $_POST['deskripsi'];

if(!empty($_FILES["tahapan5"]["name"])){
    $tahapan5 = $_FILES["tahapan5"]["name"];
    move_uploaded_file($_FILES["tahapan5"]["tmp_name"],'../../images/tahapan/'.$tahapan5);
}

mysqli_query($host, "INSERT INTO tahapan5 VALUES('$id_th5','$nama_adopter','$nama_panti','$nama_anak','$hari','$tgl','$jam','$tahapan5','$kode','$deskripsi')");

header("location:../berkas_tahapan.php");

?>