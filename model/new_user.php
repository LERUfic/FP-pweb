<?php 
	
	session_start();
	include 'koneksi.db';

	//Data User
	$username = $_POST['lg_username'];
	$password = $_POST['lg_password'];
	$description = $_POST['lg_description'];
	$tipe = $_POST['lg_type'];
	$alamat = $_POST['lg_alamat'];
	$kontak = $_POST['lg_kontak'];


	//Olah File
	$tempFile = $_FILES['lg_file']['tmp_name'];
	$desFile = "static/img/userlapak/";
	$destination = $desFile.$username;

	$result = move_uploaded_file($tempFile, $destination);


 	$sql = "insert into users set(username,password,description,tipe,alamat,kontak,imgPath) values(".$username.",".$password.",".$description.",".$tipe.",".$alamat.",".$kontak.",".$destination.")";
   
  	$result = $conn->query($sql);

	header("Location:login.php");

 ?>