<?php 
	
	session_start();
	include_once 'koneksi.php';

	//get barang2
	$idUser = $_GET['idtoko'];
  $status = 0;
	$data = array();

   	$barang = $conn->prepare('SELECT * FROM barang where idUser = ? and statusBarang = ?');
   	$barang->bind_param('ss',$idUser,$status);
   	$barang->execute();
    $barangs = $barang->get_result();

   	while($barang = $barangs->fetch_assoc()){
    	$data[]=$barang;
   	}


   	//get keterangan toko
   	$datatoko = array();

   	$datalapak = $conn->prepare('SELECT * FROM users where userid = ?');
   	$datalapak->bind_param('s',$idUser);
   	$datalapak->execute();
    $datalapaks = $datalapak->get_result();

   	while($bar = $datalapaks->fetch_assoc()){
    	$datatoko[]=$bar;
   	}

?>