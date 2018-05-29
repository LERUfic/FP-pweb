<?php 
	
	session_start();
	include_once 'koneksi.php';

	//get barang2
	$idUser = $_SESSION['logindata']['userid'];
  $status = 0;
	$data = array();

   	$barang = $conn->prepare('SELECT * FROM barang where idUser = ? and statusBarang = ?');
   	$barang->bind_param('ss',$idUser,$status);
   	$barang->execute();
    $barangs = $barang->get_result();

   	while($barang = $barangs->fetch_assoc()){
    	$data[]=$barang;
   	}

?>