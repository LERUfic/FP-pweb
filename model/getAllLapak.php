<?php 
	
	session_start();
	include 'koneksi.db';

 	$ses_sql = mysqli_query($conn,"select * from lapak");
   
	$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

	$_SESSION['lapakdata'] = $row;

?>