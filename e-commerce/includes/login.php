<?php
$con = mysqli_connect("localhost", "root", "", "e-commerce") or die(mysqli_error($con));
session_start();

$email=mysqli_real_escape_string($con,$_POST['email']);
$password=md5(mysqli_real_escape_string($con,$_POST['password']));
$query="SELECT * from users WHERE email= '{$email}' and password = '{$password}';" or die(mysqli_error($con));
$submit=mysqli_query($con,$query) or die(mysqli_error($con));
if(mysqli_num_rows($submit)){
header("location:../ProductPage.php");
$_SESSION['email']=$email;
}
else{
    echo "Wrong credentials";
}
?>