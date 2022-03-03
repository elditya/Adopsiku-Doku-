<?php 
include '../../koneksi.php';
$id = $_GET['id_anak'];
mysqli_query($host, "DELETE FROM table_anak WHERE id_anak ='$id'");

header("location:../data_anak.php?pesan=hapus");
?>