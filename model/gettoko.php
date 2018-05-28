<?php 
	
	session_start();
	include_once 'koneksi.db';

	$idUser = $_GET['idtoko'];

   	$barang = $conn->prepare('SELECT * FROM barang where idUser = ?');
   	$barang->bind_param('s',$idUser);
   	$barang->execute();
	$barangs = $barang->get_result();
   	$barang = $barangs->fetch_assoc();

   	$_SESSION['barangs'] = $barang;

?>