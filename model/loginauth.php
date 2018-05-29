<?php 
	
	session_start();
	include 'koneksi.php';

	//Get LOGIN
	$username = $_POST['lg_username'];
	$password = $_POST['lg_password'];

	$stmt = $conn->prepare('SELECT * FROM users WHERE username = ? and password = ?');

	$stmt->bind_param('ss',$username, $password);
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_assoc();

	$_SESSION['logindata'] = $row;
	
	//Redirect based on logindata
	if($_SESSION['logindata']['tipe']=='penjual'){
		header("Location: /mytoko.php");
		exit();
	}

	if($_SESSION['logindata']['tipe']=='pembeli'){
		header("Location: /lapak.php");
		exit();
	}
	
	$_SESSION['logindata'] = NULL;
	header("Location: /login.php");

?>