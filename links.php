<?php

session_start();

$username=$_SESSION['name'];

include 'conn.php';
$pass=md5($_POST['pass']);
$uname=$_POST['name'];
$facebook=$_POST['facebook'];
$linkedin=$_POST['linkedin'];
$email=$_POST['email'];
$number=$_POST['number'];
$age=$_POST['age'];
$bio=$_POST['bio'];
$position=$_POST['position'];


$sql="UPDATE signup SET facebook = '$facebook', linkedin = '$linkedin', email = '$email', pass = '$pass', number='$number', age = '$age', bio = '$bio', position = '$position' where name = '$username'";

$result=$conn->query($sql);

header("Location:profile.php?id="$result);






?>