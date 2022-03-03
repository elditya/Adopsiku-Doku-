<?php 

include '../../koneksi.php';

$id_th4 = $_POST['id_th4'];
$nama_adopter = $_POST['nama_adopter'];
$nama_panti = $_POST['nama_panti'];
$nama_anak = $_POST['nama_anak'];
$hari = $_POST['hari'];
$tgl = $_POST['tgl'];
$jam = $_POST['jam'];
$kode = $_POST['kode'];
$deskripsi = $_POST['deskripsi'];

if(!empty($_FILES["tahapan4"]["name"])){
    $tahapan4 = $_FILES["tahapan4"]["name"];
    move_uploaded_file($_FILES["tahapan4"]["tmp_name"],'../../images/tahapan/'.$tahapan4);
}

mysqli_query($host, "INSERT INTO tahapan4 VALUES('$id_th4','$nama_adopter','$nama_panti','$nama_anak','$hari','$tgl','$jam','$tahapan4','$kode','$deskripsi')");

header("location:../berkas_tahapan.php");

?>