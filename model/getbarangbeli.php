<?php 
	
	session_start();
	include_once 'koneksi.php';

	//get barang2
	$idUser = $_SESSION['logindata']['userid'];
  $status = 0;
	$data = array();

   	$barang = $conn->prepare('SELECT * FROM transaksi INNER JOIN barang ON transaksi.idBarang = barang.idbarang where transaksi.idPembeli = ? and barang.statusBarang > ?');
   	$barang->bind_param('ss',$idUser,$status);
   	$barang->execute();
    $barangs = $barang->get_result();

   	while($barang = $barangs->fetch_assoc()){
    	$data[]=$barang;
   	}
    //echo json_encode($data);
?>