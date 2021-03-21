<?php
	session_start();
	if(isset($_GET['maSV'])){
		$maSV=$_GET['maSV'];
		unset($_SESSION['info'][$maSV]);
	}
	setcookie('msg','Xoá thành công!',time()+5);
	header('location:list.php')
?>