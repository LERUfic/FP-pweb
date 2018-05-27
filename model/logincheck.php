<?php 
	session_start();
	if(empty($_SESSION['logindata'])){
		header('Location: lapak.php');
	}

	if($_SESSION['logindata']['role']=='penjual'){
   		header("Location:user.php");	
   	}

   	if($_SESSION['logindata']['role'] =='pembeli'){
   		header("Location:penjual.php");
   	}

?>