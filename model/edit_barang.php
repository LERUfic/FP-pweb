<?php 
	
	session_start();
	include 'koneksi.php';

	//Data User
	$namabarang = $_POST['namabarang'];
	$hargabarang = $_POST['hargabarang'];
	$description = $_POST['deskripsibarang'];

	$idbarang = $_SESSION['tempEdit']['idbarang']; 
	$username = $_SESSION['logindata']['username'];
	//Olah File
	$tempFile = $_FILES['imgbarang']['tmp_name'];
	$desFile = "/static/img/barang/";
	$destination = $desFile.$username.'-'.$_FILES['imgbarang']['name'];
	$dbFile = "/static/img/barang/";
	$dbFile = $dbFile.$username.'-'.$_FILES['imgbarang']['name'];

	$result = move_uploaded_file($tempFile, $destination);
   	//Proses input db
  	$stmt = $conn->prepare('UPDATE barang SET namaBarang = ?, deskripsiBarang = ?, hargaBarang = ?, imgBarang = ? WHERE idbarang = ?');

	$stmt->bind_param("sssss",$namabarang, $description, $hargabarang, $dbFile, $idbarang);

	$stmt->execute();
	header("Location: /mytoko.php");

 ?>