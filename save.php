<?php 
// Your code here!
session_start();
$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'Secret_diary');
$name="vijayalaxmi";
$name=$_SESSION['user'];

$text1=$_POST['notes_desc'];
 
 	$insertqry="INSERT INTO dairy(username, text) VALUES ('$name','$text1')";
	$insertres=mysqli_query($con,$insertqry);
	//echo mysqli_insert_id($con);
	

?>