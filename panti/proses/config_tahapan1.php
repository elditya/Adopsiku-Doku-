<?php 

include '../../koneksi.php';

$id_th1 = $_POST['id_th1'];
$nama_adopter = $_POST['nama_adopter'];
$nama_panti = $_POST['nama_panti'];
$nama_anak = $_POST['nama_anak'];
$hari = $_POST['hari'];
$tgl = $_POST['tgl'];
$jam = $_POST['jam'];
$kode = $_POST['kode'];
$deskripsi = $_POST['deskripsi'];

if(!empty($_FILES["tahapan1"]["name"])){
    $tahapan1 = $_FILES["tahapan1"]["name"];
    move_uploaded_file($_FILES["tahapan1"]["tmp_name"],'../../images/tahapan/'.$tahapan1);
}

mysqli_query($host, "INSERT INTO tahapan1 VALUES('$id_th1','$nama_adopter','$nama_panti','$nama_anak','$hari','$tgl','$jam','$tahapan1','$kode','$deskripsi')");

header("location:../berkas_tahapan.php");

?>