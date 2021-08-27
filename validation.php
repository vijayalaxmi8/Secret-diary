<?php

// Your code here!

session_start();


$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'Secret_diary');

$name=$_POST['user'];
$pass=$_POST['password'];

$s="select * from user where username='$name' && password='$pass'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1){
  
$SESSION['username']=$name;  
header('location:home.php'); 

}else{
  
  echo '<script type="text/javascript">';
echo ' alert("Invalid Username or Password")';  
echo '</script>';
header('location:index.php'); 

}

?>