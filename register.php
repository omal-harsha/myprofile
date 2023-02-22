<?php 

include_once 'dbconn.php';

$connection = mysqli_connect($dbservername,$username,$password,$dbname);



$fname = $_GET['name'];
$pass = $_GET['password'];


	$sql = "INSERT INTO user (name,password) VALUES ('$fname',$pass);";
	$result = mysqli_query($connection,$sql);

	//header("Location:index.php?signup=success");
 ?>