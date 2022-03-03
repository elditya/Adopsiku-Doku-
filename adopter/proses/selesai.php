<?php 

include '../../koneksi.php';

$id_history = $_POST['id_history'];
$nama_adopter = $_POST['nama_adopter'];
$nama_panti = $_POST['nama_panti'];
$nama_anak = $_POST['nama_anak'];
$hari = $_POST['hari'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$tgl_selesai = $_POST['tgl_selesai'];
$kode = $_POST['kode'];


mysqli_query($host, "INSERT INTO history VALUES('$id_history','$nama_panti','$nama_anak','$nama_adopter','$hari','$bulan','$tahun','$tgl_selesai','$kode')");

header("location:../liat_jadwal.php?pesan=input");

?>