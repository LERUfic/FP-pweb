<?php 
	
	session_start();
	include 'koneksi.php';

	//Data User
	$idbarang = $_GET['idbarang'];
	$statusBarang = 1;
	$userid = $_SESSION['logindata']['userid'];
	$imgBukti = NULL;


   	//change status to 1
  	$stmt = $conn->prepare('UPDATE barang SET statusBarang = ? WHERE idbarang = ?');
	$stmt->bind_param("ss",$statusBarang, $idbarang);
	$stmt->execute();

	//insert into transaksi for log purpose
	
	$stmt2 = $conn->prepare('INSERT INTO transaksi(idBarang,idPembeli,imgBukti) VALUES(?,?,?)');
	$stmt2->bind_param("sss",$idbarang, $userid, $imgBukti);
	$stmt2->execute();

	header("Location: /transaksi.php");

 ?>