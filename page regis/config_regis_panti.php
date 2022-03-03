<?php 

include '../koneksi.php';

$id_panti = $_POST['id_panti'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$nama_panti = $_POST['nama_panti'];
$alamat_panti = $_POST['alamat_panti'];
$nomor_telepon = $_POST['nomor_telepon'];
$role = $_POST['role'];
if(!empty($_FILES["foto_panti"]["name"])){
    $foto_panti = $_FILES["foto_panti"]["name"];
    move_uploaded_file($_FILES["foto_panti"]["tmp_name"],'../images/file_panti/profil_panti/'.$foto_panti);
}
if(!empty($_FILES["foto_pf"]["name"])){
    $foto_pf = $_FILES["foto_pf"]["name"];
    move_uploaded_file($_FILES["foto_pf"]["tmp_name"],'../images/file_panti/profil_panti/'.$foto_pf);
}


mysqli_query($host, "INSERT INTO table_panti VALUES('$id_panti','$username','$password','$email','$nama_panti','$alamat_panti','$nomor_telepon','$foto_panti','$foto_pf','$role')");

header("location:../login/login.php?pesan=input");

?>