<?php 
	
	session_start();
	include 'koneksi.db';

	$username = $_POST['lg_username'];
	$password = $_POST['lg_password'];

 	$sql = "select * from users where username = ".$username." and password = ".$password.";
   
   	$result = $conn->query($sql);

	$row = $result->fetch_array(MYSQLI_ASSOC);

	$_SESSION['logindata'] = $row;
	
	if($row['logindata']['role']=='penjual'){
		header("Location:user.php");	
	}

	if($row['logindata']['role']=='pembeli'){
		header("Location:penjual.php");
	}
   
	if(empty($_SESSION['logindata'])){
      header("Location:login.php");
  	}

?>