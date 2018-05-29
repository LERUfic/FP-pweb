<?php 
	
	session_start();
	include 'koneksi.php';

	//Data User
	$idbarang = $_POST['barangid'];
	$statusBarang = 2;
	$username = $_SESSION['logindata']['username'];
	
	$tempFile = $_FILES['filebukti']['tmp_name'];
	$desFile = "../static/img/bukti/";
	$destination = $desFile.$username.'-'.$_FILES['filebukti']['name'];
	$dbFile = "/static/img/bukti/";
	$dbFile = $dbFile.$username.'-'.$_FILES['filebukti']['name'];

	//echo json_encode($_FILES);
	$result = move_uploaded_file($tempFile, $destination);

   	//change status to 2
  	$stmt = $conn->prepare('UPDATE barang SET statusBarang = ? WHERE idbarang = ?');
	$stmt->bind_param("ss",$statusBarang, $idbarang);
	$stmt->execute();

	header("Location: /transaksi.php");

 ?>