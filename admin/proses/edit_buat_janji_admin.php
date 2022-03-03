<?php 

include '../../koneksi.php';

$id = $_POST['id_janji'];
$nama_panti = $_POST['nama_panti'];
$nama_anak = $_POST['nama_anak'];
$adopter = $_POST['nama_adopter'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$tgl = $_POST['tanggal'];



mysqli_query($host, "UPDATE table_janji SET nama_panti='$nama_panti', nama_anak ='$nama_anak',nama_adopter ='$adopter', hari = '$hari', jam = '$jam', tanggal = '$tgl' WHERE id_janji ='$id'");

header("location:../data_perjanjian.php?pesan=input");

?>