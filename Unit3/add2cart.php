<?php
	require('data.php');
	session_start();
	

	//b1:Lấy mã sản phẩm người dùng đang chọn
	$maSP=$_GET['maSP'];
	if (isset($_SESSION['cart'][$maSP])) {
		$_SESSION['cart'][$maSP]['soLuong']++;
	}
	else{
		$product=$products[$maSP];
		$product['soLuong']=1;
		$_SESSION['cart'][$maSP]=$product;
	}
	
	// if (isset($_SESSION['maSP'])) {
	// 	$_SESSION[$maSP]['soLuong']++;
	// 	setcookie('them','huhy',time()+2);
	// }
	// else {
	// 	//lấy tt sản phẩm theo mã
	// 	$product=$products['cart'][$maSP];
	// 	setcookie('them','success',time()+2);
	// 	//gán số lượng về 1
	// 	$product['soLuong']=1;
	// 	$_SESSION[$maSP]=$product;
	// }
	header('location:cart.php');

?>