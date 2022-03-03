<?php

include '../../koneksi.php';
$tahun = $_POST['tahun'];
 mysqli_query($host, "DELETE  FROM history where tahun = '$tahun'");

header("location:../history.php?pesan=Berhasil Diarsipkan");




?>