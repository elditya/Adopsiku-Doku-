<?php 
include '../../koneksi.php';
$id = $_GET['id_event'];
mysqli_query($host, "DELETE FROM event WHERE id_event ='$id'");

echo '<script language="javascript" type="text/javascript">
alert("data berhasil di hapus!");</script>';
echo "<meta http-equiv='refresh' content='2; url=index.php'>";


header("location:../index_panti.php?pesan=hapus");
?>