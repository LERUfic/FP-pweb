<?php 
	
	session_start();
	include 'koneksi.php';

	//Get LOGIN
	$username = $_POST['lg_username'];
	$password = $_POST['lg_password'];

	// echo json_encode($username);
	// echo json_encode($password);

	$stmt = $conn->prepare('SELECT * FROM users WHERE username = ? and password = ?');

	$stmt->bind_param('ss',$username, $password);
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_assoc();

	$_SESSION['logindata'] = $row;
	//echo json_encode($_SESSION['logindata']['tipe']);
	
	//Redirect based on logindata
	if($_SESSION['logindata']['tipe']=='penjual'){
		header("Location: /penjual.php");
		exit();
	}

	if($_SESSION['logindata']['tipe']=='pembeli'){
		header("Location: /lapak.php");
		exit();
	}
	
	$_SESSION['logindata'] = NULL;
	header("Location: /login.php");

?>