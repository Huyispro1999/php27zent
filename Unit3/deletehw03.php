<?php 
session_start();
	if (isset($_GET['maSP'])) {
		$maSP = $_GET['maSP'];
		unset($_SESSION['sanpham'][$maSP]);
		header("Location: giohang.php");
	} else{
    	header("Location: giohang.php");
    }
 ?>