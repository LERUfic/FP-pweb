<?php 
	
	session_start();
	include_once 'koneksi.php';

	//get barang2
	$idbarang = $_GET['idbarang'];
    $data = array();
   	$barang = $conn->prepare('SELECT * FROM barang where idbarang = ?');
   	$barang->bind_param('s',$idbarang);
   	$barang->execute();
    $barangs = $barang->get_result();
    $row = $barangs->fetch_assoc();
    $data = $row;
    $_SESSION['tempEdit'] = $row;

?>