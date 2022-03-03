<?php 

include '../../koneksi.php';

$id_th2 = $_POST['id_th2'];
$nama_adopter = $_POST['nama_adopter'];
$nama_panti = $_POST['nama_panti'];
$nama_anak = $_POST['nama_anak'];
$hari = $_POST['hari'];
$tgl = $_POST['tgl'];
$jam = $_POST['jam'];
$kode = $_POST['kode'];
$deskripsi = $_POST['deskripsi'];

if(!empty($_FILES["tahapan2"]["name"])){
    $tahapan2 = $_FILES["tahapan2"]["name"];
    move_uploaded_file($_FILES["tahapan2"]["tmp_name"],'../../images/tahapan/'.$tahapan2);
}

mysqli_query($host, "UPDATE tahapan2 SET  nama_adopter='$nama_adopter', nama_panti='$nama_panti', nama_anak ='$nama_anak', hari = '$hari',jam = '$jam', tgl = '$tgl', tahapan2 = '$tahapan2' , kode ='$kode ',deskripsi ='$deskripsi ' WHERE id_th2 ='$id_th2'");

header("location:../berkas_tahapan.php");

?>