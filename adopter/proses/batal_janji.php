<?php 
include '../../koneksi.php';
$id_janji = $_GET['id_janji'];
mysqli_query($host, "DELETE FROM table_janji WHERE id_janji ='$id_janji'");

echo '<script language="javascript" type="text/javascript">
alert("data berhasil di hapus!");</script>';
echo "<meta http-equiv='refresh' content='2; url=index.php'>";


header("location:../liat_jadwal.php?pesan=hapus");
?>