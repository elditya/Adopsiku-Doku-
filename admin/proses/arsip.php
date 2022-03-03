<?php

include '../../koneksi.php';
$tahun = $_POST['tahun'];
 mysqli_query($host, "INSERT INTO archive SELECT * FROM history where tahun = '$tahun'");

header("location:../hapus_archive.php?pesan=Berhasil Diarsipkan");




?>