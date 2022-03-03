<?php 

include '../../koneksi.php';

$id_panti = $_POST['id_panti'];
$username = $_POST['username'];
$nama_panti = $_POST['nama_panti'];
$email = $_POST['email'];
$nomor_telepon = $_POST['nomor_telepon'];
$alamat = $_POST['alamat_panti'];
$foto_pf = $_POST['foto_pf'];
$foto_panti = $_POST['foto_panti'];
$foto_lama_pf = $_POST['foto_lama_pf'];
$foto_lama_panti = $_POST['foto_lama_panti'];

if ( $_FILES['foto_pf']['error'] === 4  ){
    $foto_pf = $foto_lama_pf;
}
 else {
    $foto_pf = $_FILES["foto_pf"]["name"];
    move_uploaded_file($_FILES["foto_pf"]["tmp_name"],'../../images/profil/'.$foto_pf);
}


if ( $_FILES['foto_panti']['error'] === 4  ){
    $foto_panti = $foto_lama_panti;
}
 else {
    $foto_panti = $_FILES["foto_panti"]["name"];
    move_uploaded_file($_FILES["foto_panti"]["tmp_name"],'../../images/profil/'.$foto_panti);
}

mysqli_query($host," UPDATE table_panti SET username='$username',email='$email', nomor_telepon ='$nomor_telepon', alamat_panti = '$alamat',foto_panti = '$foto_panti', foto_pf ='$foto_pf'  WHERE id_panti ='$id_panti'");

header("location:../profil_panti.php?pesan=input");

?>