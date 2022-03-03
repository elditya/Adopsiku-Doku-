<?php 

include '../koneksi.php';

$id_donasi = $_POST['id_donasi'];
$pendonasi = $_POST['pendonasi'];
$nama = $_POST['nama'];
$nama_panti = $_POST['nama_panti'];
$nominal = $_POST['nominal'];
$tgl_pengajuan = $_POST['tgl_pengajuan'];
$tgl_selesai = $_POST['tgl_selesai'];
$bukti_struk = $_POST['bukti_struk'];
$status = $_POST['status'];



mysqli_query($host, "INSERT INTO donasi VALUES('$id_donasi','$pendonasi','$nama','$nama_panti','$nominal','$tgl_pengajuan','$tgl_selesai','$bukti_struk','$status')");

header("location:pelunasan_donasi.php?id_donasi=$id_donasi");

?>