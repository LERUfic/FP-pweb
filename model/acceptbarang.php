<?php 
	
	session_start();
	include 'koneksi.php';

	//Data User
	$idbarang = $_GET['idbarang'];
	$statusBarang = 4;


   	//change status to 2
  	$stmt = $conn->prepare('UPDATE barang SET statusBarang = ? WHERE idbarang = ?');
	$stmt->bind_param("ss",$statusBarang, $idbarang);
	$stmt->execute();

	header("Location: /transaksi.php");

 ?>