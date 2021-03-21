<?php
	session_start();
	$type=$_GET['type'];
	$maSP=$_GET['maSP'];
	if ($_SESSION['cart'][$maSP]['soLuong']>1 && $type==0) {
		$_SESSION['cart'][$maSP]['soLuong']--;
		
	}
	else{
		unset($_SESSION['cart'][$maSP]);
	}
	
	header('Location: cart.php');
?>