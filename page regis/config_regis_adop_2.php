<?php 

include '../koneksi.php';

    $id_adopter1 = $_POST['id_adopter1'];

    $username = $_POST['username'];

   if(!empty($_FILES["ktp"]["name"])){
       $ktp = $_FILES["ktp"]["name"];
       move_uploaded_file($_FILES["ktp"]["tmp_name"],'../images/file_adopter/'.$ktp);
   }

   if(!empty($kk = $_FILES["kk"]["name"])){
      $kk = $_FILES["kk"]["name"];
    move_uploaded_file($_FILES["kk"]["tmp_name"], '../images/file_adopter/'.$kk);
    }

    if(!empty($_FILES["skck"]["name"])){
        $skck = $_FILES["skck"]["name"];
        move_uploaded_file($_FILES["skck"]["tmp_name"], '../images/file_adopter/'.$skck);
    }

    if(!empty($_FILES["bk"]["name"])){
        $bk = $_FILES["bk"]["name"];
        move_uploaded_file($_FILES["bk"]["tmp_name"], '../images/file_adopter/'.$bk);
    }

    if(!empty($_FILES["skdk"]["name"])){
        $skdk = $_FILES["skdk"]["name"];
        move_uploaded_file($_FILES["skdk"]["tmp_name"], '../images/file_adopter/'.$skdk);
    }

    if(!empty($_FILES["slip"]["name"])){
        $slip = $_FILES["slip"]["name"];
        move_uploaded_file($_FILES["slip"]["tmp_name"], '../images/file_adopter/'.$slip);
    }

    if(!empty($_FILES["spaa"]["name"])){
        $spaa = $_FILES["spaa"]["name"];
        move_uploaded_file($_FILES["spaa"]["tmp_name"], '../images/file_adopter/'.$spaa);
    }


    mysqli_query($host, "INSERT INTO table_adopter1 VALUES('$id_adopter1','$username','$ktp','$kk','$skck','$bk','$skdk','$slip','$spaa')");
       
    header('location:../login/login.php');
?>
