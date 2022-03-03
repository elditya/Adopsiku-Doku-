<?php 

include '../koneksi.php';

    $id_adopter = $_POST['id_adopter'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $hobi = $_POST['hobi'];
    $nomor_telepon = $_POST['telepon'];
    $TTL = $_POST['TTL'];
    $role = $_POST['role'];


    if ($TTL > '1994-12-31') {
        echo "<script> 
        alert('Umur Anda Kurang');
        document.location.href = 'register_adopter.php' ;
        </script>";
        
    } else {
        if (!empty($_FILES['foto']['name'])) {
            $foto = $_FILES['foto']['name'];
            move_uploaded_file($_FILES['foto']['tmp_name'], '../images/profil/' . $foto);
        }
    
        mysqli_query($host, "INSERT INTO table_adopter VALUES('$id_adopter','$username','$password','$email','$nomor_telepon','$TTL','$foto','$role')");
    
    
        header("location:register_adopter_2.php?pesan=input");
    }