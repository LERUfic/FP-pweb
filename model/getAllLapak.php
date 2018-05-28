<?php 
	
	session_start();
	include 'koneksi.php';

   $data = array();
   $parameter = "penjual";
   $queryLapak = $conn->prepare("SELECT * FROM users where tipe = ?");
   $queryLapak->bind_param("s",$parameter);
   $queryLapak->execute();
   $lapaks = $queryLapak->get_result();

   while($lapak = $lapaks->fetch_assoc()){
      $data[]=$lapak;
   }

?>