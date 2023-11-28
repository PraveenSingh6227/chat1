<?php 
include("config.php");
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($con,"Select * from user where username = '$username' and password ='$password'") or die(mysqli_error());;
$count = mysqli_num_rows($query);
$row = mysqli_fetch_array($query);


		if ($count > 0){
		
		$_SESSION['id']=$row['user_id'];
		
		echo 'true';
		
		
		 }else{ 
		echo 'false';
		}	

?>