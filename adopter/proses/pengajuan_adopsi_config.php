<?php 

include '../../koneksi.php';

$id_ajuan = $_POST['id_ajuan'];
$nama_adopter = $_POST['nama_adopter'];
$nama_anak = $_POST['nama_anak'];
$nama_panti = $_POST['nama_panti'];
$alasan = $_POST['alasan'];
$status = $_POST['status'];



mysqli_query($host, "INSERT INTO ajuan_adopsi VALUES('$id_ajuan','$nama_adopter','$nama_anak','$nama_panti','$alasan','$status')");

header("location:../ajukan_adopsi.php");

?>