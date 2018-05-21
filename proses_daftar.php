<?php
include 'koneksi.php';
$email = $_POST['email'];
$password = $_POST['password'];
$cekuser = mysqli_query($conn,"SELECT * FROM login WHERE email = '$email'");

if(mysqli_num_rows($cekuser) <> 0) {
  echo "Username Sudah Terdaftar!";
} else {
  if(!$email || !$password) {
    echo "Masih ada data yang kosong!";
} else {
  $simpan = mysqli_query($conn,"INSERT INTO login(email, password) VALUES('$email','$password')");
  if($simpan) {
    echo "Pendaftaran Sukses, Silahkan Login";
    echo" <a href= 'login.php'>Klik Disini</a>";
} else {
  echo "Proses Gagal";
    }
  }
}
?>
