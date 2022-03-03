<?php 

include '../../koneksi.php';

$id_event = $_POST['id_event'];
$nama_panti = $_POST['nama_panti'];
$nama_event = $_POST['nama_event'];
$judul_event = $_POST['judul_event'];
$tanggal_event = $_POST['tanggal_event'];
$isi_event = $_POST['isi_event'];
$deskripsi_event = $_POST['deskripsi_event'];
$gambar_lama = $_POST['gambar_lama'];




if ( $_FILES['gambar']['error'] === 4 ){
    $gambar = $gambar_lama;
} else {
    $gambar = $_FILES["gambar"]["name"];
    move_uploaded_file($_FILES["gambar"]["tmp_name"],'../../../images/event/'.$gambar);
}
    
    


mysqli_query($host," UPDATE event SET nama_panti='$nama_panti', nama_event ='$nama_event', judul_event='$judul_event', tanggal_event ='$tanggal_event', isi_event = '$isi_event', deskripsi_event = '$deskripsi_event', gambar = '$gambar' WHERE id_event ='$id_event'");


header("location:../index_panti.php");

?>