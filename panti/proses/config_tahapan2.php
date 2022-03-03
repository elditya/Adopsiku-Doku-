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

mysqli_query($host, "INSERT INTO tahapan2 VALUES('$id_th2','$nama_adopter','$nama_panti','$nama_anak','$hari','$tgl','$jam','$tahapan2','$kode','$deskripsi')");

header("location:../berkas_tahapan.php");

?>