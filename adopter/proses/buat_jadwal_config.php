<?php 

include '../../koneksi.php';

$id_janji = $_POST['id_janji'];
$adopter = $_POST['username'];
$nama_panti = $_POST['nama_panti'];
$nama_anak = $_POST['nama_anak'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$tgl = $_POST['tgl_janji'];
$kode = $_POST['kode'];


mysqli_query($host, "INSERT INTO table_janji VALUES('$id_janji','$nama_panti','$nama_anak','$adopter','$hari','$jam','$tgl','$kode')");

header("location:../liat_jadwal.php?pesan=input");

?>