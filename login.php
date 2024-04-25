<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$umur = $_POST['umur'];
if($email == "ALAziz@usm.ac.id" && $password == "2711" && $umur >= 16 && $umur <=44){
    // echo "<b>Login Berhasil</b>";
    $_SESSION['login'] = true;
    header('Location: http://localhost/praktekweb-1/dashboard.php');
}else{
    header('Location: http://localhost/praktekweb-1/index.php?error=Login Gagal');
}