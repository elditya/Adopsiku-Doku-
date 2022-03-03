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
$status = $_POST['status'];

if(!empty($_FILES["sk"]["name"])){
    $sk = $_FILES["sk"]["name"];
    move_uploaded_file($_FILES["sk"]["tmp_name"],'./../images/anak/'.$sk);
}

if(!empty($_FILES["foto_anak"]["name"])){
    $foto_anak = $_FILES["foto_anak"]["name"];
    move_uploaded_file($_FILES["foto_anak"]["tmp_name"],'./../images/anak/'.$foto_anak);
}


mysqli_query($host, "INSERT INTO table_anak VALUES('$id_anak','$nama_anak','$nama_panti','$tl','$ttl','$umur_anak','$jk','$agama','$hobby','$kesehatan','$ket','$sk','$foto_anak','$status')");

header("location:../index_panti.php?pesan=input");

?>