<?php

// Your code here!

session_start();




$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'Secret_diary');

$name=$_POST['user'];
$pass=$_POST['password'];

$s="select * from user where username='$name'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1){
    
echo "User already registered";
header('location:index.php');

}else{
  
  $reg="insert into user(username,password)values('$name','$pass')";
  header('location:home.php');
   
 mysqli_query($con,$reg);
    
echo "Regitratin Succesful";

}

?>