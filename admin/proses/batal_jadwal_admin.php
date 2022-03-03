<?php 
include '../../koneksi.php';
$id = $_GET['id_janji'];
mysqli_query($host, "DELETE FROM table_janji WHERE id_janji ='$id'");

header("location:../data_perjanjian.php?pesan=hapus");
?>