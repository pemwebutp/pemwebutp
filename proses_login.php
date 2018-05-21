<?php
include 'koneksi.php';
$email = $_POST['email'];
$password = $_POST['password'];
$login = mysqli_query($conn,"SELECT * FROM login WHERE email='$email' AND password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
	session_start();
	$_SESSION['email'] = $email;
	echo "login successful";
	if($email=='admin@admin'){
	header("location:index.php");
	}
	else{
		header("location:jadimabacom2.html");
	}
}

else{
	echo "login failed";
	//header("location:login.php");
}

?>
