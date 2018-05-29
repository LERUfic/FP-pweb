<?php 
	
	session_start();
	include_once 'koneksi.php';

	//get barang2
	$idbarang = $_GET['idbarang'];
	$data = array();

   	$barang = $conn->prepare('DELETE FROM barang where idbarang = ?');
   	$barang->bind_param('s',$idbarang);
   	$barang->execute();

    header('Location: /mytoko.php');
?>