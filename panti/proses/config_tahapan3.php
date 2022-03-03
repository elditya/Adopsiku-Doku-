<?php 

include '../../koneksi.php';

$id_th3 = $_POST['id_th3'];
$nama_adopter = $_POST['nama_adopter'];
$nama_panti = $_POST['nama_panti'];
$nama_anak = $_POST['nama_anak'];
$hari = $_POST['hari'];
$tgl = $_POST['tgl'];
$jam = $_POST['jam'];
$kode = $_POST['kode'];
$deskripsi = $_POST['deskripsi'];

if(!empty($_FILES["tahapan3"]["name"])){
    $tahapan3 = $_FILES["tahapan3"]["name"];
    move_uploaded_file($_FILES["tahapan3"]["tmp_name"],'../../images/tahapan/'.$tahapan3);
}

mysqli_query($host, "INSERT INTO tahapan3 VALUES('$id_th3','$nama_adopter','$nama_panti','$nama_anak','$hari','$tgl','$jam','$tahapan3','$kode','$deskripsi')");

header("location:../berkas_tahapan.php");

?>