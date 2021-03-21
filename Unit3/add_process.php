<?php
	session_start();
		if (isset($_POST['maSV'])) {
			$maSV=$_POST['maSV'];
		}
		if (isset($_POST['hoTen'])) {
		$hoTen=$_POST['hoTen'];
		}
		if (isset($_POST['soDT'])) {
			$soDT=$_POST['soDT'];
		}
		if (isset($_POST['email'])) {
			$email=$_POST['email'];
		}
		if (isset($_POST['gioiTinh'])) {
			$gioiTinh=$_POST['gioiTinh'];
		}
		if (isset($_POST['diaChi'])) {
			$diaChi=$_POST['diaChi'];
		}
		$_SESSION['info'][$maSV]=[
			'maSV'=>$maSV,
			'hoTen'=>$hoTen,
			'soDT' =>$soDT,
			'email'=>$email,
			'gioiTinh'=>$gioiTinh,
			'diaChi'=>$diaChi,

		];
		setcookie('msg','Thêm mới thành công!',time()+5);
		header('location:list.php');
?>