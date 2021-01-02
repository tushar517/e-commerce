<?php

$con = mysqli_connect("localhost", "root", "", "e-commerce") or die(mysqli_error($con));
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=md5(mysqli_real_escape_string($con,$_POST['password']));
$city=mysqli_real_escape_string($con,$_POST['city']);
$contact=mysqli_real_escape_string($con,$_POST['contact']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$query="INSERT INTO users(name,email,password,city,contact,address) VALUES('$name','$email','$password','$city','$contact','$address')" or die(mysqli_error($con));
$submit=mysqli_query($con,$query) or die(mysqli_error($con));
header("location:../ProductPage.php");
?>
