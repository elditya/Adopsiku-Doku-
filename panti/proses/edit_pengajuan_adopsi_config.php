<?php 

include '../../koneksi.php';

$id_ajuan = $_POST['id_ajuan'];
$nama_adopter = $_POST['nama_adopter'];
$nama_anak = $_POST['nama_anak'];
$nama_panti = $_POST['nama_panti'];
$alasan = $_POST['alasan'];
$status = $_POST['status'];


mysqli_query($host," UPDATE ajuan_adopsi SET nama_adopter='$nama_adopter', nama_anak ='$nama_anak', nama_panti='$nama_panti', alasan = '$alasan' , status = '$status' WHERE id_ajuan ='$id_ajuan'");


header("location:../index_panti.php");

?>