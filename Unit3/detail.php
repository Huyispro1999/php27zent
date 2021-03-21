<?php
	session_start();
	if (isset($_GET['maSV'])) {
		$maSV=$_GET['maSV'];
	}
	if (isset($_SESSION['info'])) {
		$data_arr=$_SESSION['info'][$maSV];
	}
	echo "<br><h1>Thông tinh sinh viên</h1>";
	echo "<br>-Mã sinh viên:".$data_arr['maSV'];
	echo "<br>-Họ và tên:".$data_arr['hoTen'];
	echo "<br>-Số điện thoại:".$data_arr['soDT'];
	echo "<br>-Email:".$data_arr['email'];
	echo "<br>-Giới tính:".$data_arr['gioiTinh'];
	echo "<br>-Địa chỉ:".$data_arr['diaChi'];


?>