<?php 

include '../../koneksi.php';

$id_anak = $_POST['id_anak'];
$nama_anak = $_POST['nama_anak'];
$nama_panti = $_POST['nama_panti'];
$tl = $_POST['tl'];
$ttl = $_POST['ttl'];
$umur_anak = $_POST['umur_anak'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$hobby = $_POST['hobby'];
$kesehatan = $_POST['kesehatan'];
$ket = $_POST['ket'];

if(!empty($_FILES["sk"]["name"])){
    $sk = $_FILES["sk"]["name"];
    move_uploaded_file($_FILES["sk"]["tmp_name"],'../../public/file/anak/'.$sk);
}

if(!empty($_FILES["foto_anak"]["name"])){
    $foto_anak = $_FILES["foto_anak"]["name"];
    move_uploaded_file($_FILES["foto_anak"]["tmp_name"],'../../public/file/anak/'.$foto_anak);
}


mysqli_query($host," UPDATE table_anak SET nama_anak='$nama_anak', nama_panti ='$nama_panti', tl='$tl', ttl ='$ttl', umur_anak = '$umur_anak', jk = '$jk', agama = '$agama', hobby = '$hobby', kesehatan = '$kesehatan', ket = '$ket', sk = '$sk', foto_anak = '$foto_anak' WHERE id_anak ='$id_anak'");

header("location:../data_anak.php?pesan=input");

?>