<?php 

include '../../koneksi.php';

$id_donasi = $_POST['id_donasi'];
$nama = $_POST['nama'];
$nama_panti = $_POST['nama_panti'];
$nominal = $_POST['nominal'];
$tgl_pengajuan = $_POST['tgl_pengajuan'];
$tgl_selesai = $_POST['tgl_selesai'];
$status = $_POST['status'];

if(!empty($_FILES["bukti_struk"]["name"])){
    $bukti_struk = $_FILES["bukti_struk"]["name"];
    move_uploaded_file($_FILES["bukti_struk"]["tmp_name"],'../../images/file_donasi/'.$bukti_struk);
}

mysqli_query($host," UPDATE donasi SET nama='$nama',nama_panti='$nama_panti', nominal ='$nominal', tgl_pengajuan = '$tgl_pengajuan', tgl_selesai='$tgl_selesai', bukti_struk = '$bukti_struk',status = '$status' WHERE id_donasi ='$id_donasi'");

header("location:../pembayaran_donasi.php?pesan=input");

?>