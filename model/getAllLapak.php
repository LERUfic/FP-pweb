<?php 
	
	session_start();
	include_once 'koneksi.db';

   $parameter = "penjual";
   $queryLapak = $conn->prepare("SELECT * FROM users where tipe = ?");
   $queryLapak->bind_param("s",$parameter);
   $queryLapak->execute();
   $lapaks = $queryLapak->get_result();
   $lapak = $lapaks->fetch_assoc();

   $_SESSION['lapakdata'] = $lapak;

?>