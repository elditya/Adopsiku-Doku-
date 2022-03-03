<?php 

include '../../koneksi.php';

$id_th1 = $_POST['id_th3'];
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

mysqli_query($host, "UPDATE tahapan3 SET  nama_adopter='$nama_adopter', nama_panti='$nama_panti', nama_anak ='$nama_anak', hari = '$hari',jam = '$jam', tgl = '$tgl', tahapan3 = '$tahapan3' , kode ='$kode ',deskripsi ='$deskripsi ' WHERE id_th3 ='$id_th1'");

header("location:../berkas_tahapan.php");

?>