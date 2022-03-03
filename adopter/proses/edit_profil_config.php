<?php 

include '../../koneksi.php';

$id = $_POST['id_adopter'];
$id1 = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$nomor_telepon = $_POST['telepon'];
$TTL = $_POST['TTL'];
$role= $_POST['role'];
$foto_lama = $_POST['foto_lama'];

if ( $_FILES['foto']['error'] === 4 ){
    $foto = $foto_lama;
}
 else {
    $foto = $_FILES["foto"]["name"];
    move_uploaded_file($_FILES["foto"]["tmp_name"],'../../images/profil/'.$foto);
}



mysqli_query($host," UPDATE table_adopter SET username='$username',email='$email', telepon ='$nomor_telepon', TTL = '$TTL', foto='$foto' WHERE id_adopter ='$id'");

header("location:../profil.php?pesan=input");

?>