<?php 
	
	session_start();
	include 'koneksi.php';

	//Data User
	$username = $_POST['lg_username'];
	$password = $_POST['lg_password'];
	$description = $_POST['lg_description'];
	$tipe = $_POST['lg_type'];
	$alamat = $_POST['lg_alamat'];
	$kontak = $_POST['lg_kontak'];

	//Olah File
	$tempFile = $_FILES['lg_file']['tmp_name'];
	$desFile = "../static/img/userlapak/";
	$destination = $desFile.$username.'-'.$_FILES['lg_file']['name'];
	$dbFile = "/static/img/userlapak/";
	$dbFile = $dbFile.$username.'-'.$_FILES['imgbarang']['name'];


	$result = move_uploaded_file($tempFile, $destination);

   	//Proses input db
  	$stmt = $conn->prepare('INSERT INTO users (username,password,description,tipe,alamat,kontak,imgPath) VALUES(?,?,?,?,?,?,?)');

	$stmt->bind_param("sssssss",$username, $password, $description, $tipe, $alamat, $kontak, $dbFile);
	$stmt->execute();

	header("Location: /login.php");

 ?>