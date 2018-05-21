<?php
$username = "root";
$password = "";
$database = "pemweb";
$host_name ="localhost";

$conn = mysqli_connect("$host_name", "$username", "$password", "$database");

if(mysqli_connect_errno()){
	echo "Failied to connect ".mysqli_connect_error();
}
?>
