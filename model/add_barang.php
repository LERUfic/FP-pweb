<?php 
	
	session_start();
	include 'koneksi.php';

	//Data User
	$namabarang = $_POST['namabarang'];
	$hargabarang = $_POST['hargabarang'];
	$description = $_POST['deskripsibarang'];
	$status = 0;
	$iduser = $_SESSION['logindata']['userid'];
	$username = $_SESSION['logindata']['username'];

	//Olah File
	$tempFile = $_FILES['imgbarang']['tmp_name'];
	$desFile = "../static/img/barang/";
	$destination = $desFile.$username.'-'.$_FILES['imgbarang']['name'];
	$dbFile = "/static/img/barang/";
	$dbFile = $dbFile.$username.'-'.$_FILES['imgbarang']['name'];

	$result = move_uploaded_file($tempFile, $destination);

   	//Proses input db
  	$stmt = $conn->prepare('INSERT INTO barang (namaBarang,deskripsiBarang,hargaBarang,idUser,imgBarang,statusBarang) VALUES(?,?,?,?,?,?)');

	$stmt->bind_param("ssssss",$namabarang, $description, $hargabarang, $iduser, $dbFile, $status);
	$stmt->execute();

	header("Location: /mytoko.php");

 ?>