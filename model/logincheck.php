<?php 
	session_start();
	if(empty($_SESSION['logindata'])){
		header('Location: /login.php');
	}

	if($_SESSION['logindata']['tipe']=='penjual'){
   		header("Location: /mytoko.php");	
   	}

   	if($_SESSION['logindata']['tipe'] =='pembeli'){
   		header("Location: /lapak.php");
   	}

?>