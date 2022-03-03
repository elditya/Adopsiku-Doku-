<?php 

include '../../koneksi.php';

$id_th1 = $_POST['id_th5'];
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

mysqli_query($host, "UPDATE tahapan5 SET  nama_adopter='$nama_adopter', nama_panti='$nama_panti', nama_anak ='$nama_anak', hari = '$hari',jam = '$jam', tgl = '$tgl', tahapan5 = '$tahapan5' , kode ='$kode ',deskripsi ='$deskripsi ' WHERE id_th5 ='$id_th1'");

header("location:../berkas_tahapan.php");

?>