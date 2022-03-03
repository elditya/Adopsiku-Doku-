<?php 
session_start();

include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];


$q = mysqli_query($host,"SELECT * FROM table_admin WHERE username='$username' and password='$password'");
$r = mysqli_fetch_array ($q);
$q2 = mysqli_query($host,"SELECT * FROM table_adopter WHERE username='$username' and password='$password'");
$row = mysqli_fetch_array ($q2);
$q3 = mysqli_query($host,"SELECT * FROM table_panti WHERE username='$username' and password='$password'");
$row1 = mysqli_fetch_array ($q3);

//admin
if (mysqli_num_rows($q) == 1) {
    $_SESSION['id_admin'] = $r['id_admin'];
    $_SESSION['username'] = $r['username'];
    $_SESSION['password'] = $r['password'];
    $_SESSION['role'] = 'admin';
    header('location:../admin/home_admin.php');
}
//adopter
elseif (mysqli_num_rows($q2) == 1) {
    $_SESSION['id_adopter'] = $row['id_adopter'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['role'] = 'adopter';
    header('location:../adopter/index_adopter.php');
}

//panti
elseif (mysqli_num_rows($q3) == 1){
	$_SESSION['id_panti'] = $row1['id_panti'];
    $_SESSION['username'] = $row1['username'];
    $_SESSION['password'] = $row1['password'];
    $_SESSION['role'] = 'panti';
    header('location:../panti/index_panti.php');
	
}else{
	echo "<script>alert('Username atau Password salah !!!'); document.location='login.php'</script>";
}


?>