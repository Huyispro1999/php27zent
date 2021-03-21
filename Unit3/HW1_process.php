<?php
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
	echo "<br><h1>Thông tin sinh viên</h1>";
	echo "<br>-Mã sinh viên:".$maSV;
	echo "<br>-Họ và tên:".$hoTen;
	echo "<br>-Số điện thoại:".$soDT;
	echo "<br>-Email:".$email;
	echo "<br>-Giới tính:".$gioiTinh;
	echo "<br>-Địa chỉ:".$diaChi;
?>	