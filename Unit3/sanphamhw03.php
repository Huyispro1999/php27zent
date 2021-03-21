<?php 
session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Danh Sách Sản Phẩm</title>
</head>

<style type="text/css">
	.gt{
		font-size: 25px;
	}
	
</style>
<body>
	<div class="container" style="font-size: 20px">
	<table cellpadding="10px" cellspacing="0px" border="3px"  width="65%" hight= auto; align="center" >
		<tr align="center" class="gt">
			<font>
				<td style="background-color: yellow" colspan="3">Danh Sách Sản Phẩm</td>
				<td style="background-color: yellow" colspan="2"><a href="giohang.php">Xem Giỏ Hàng</a></td>
			</font>
		</tr>
		<tr align="center" class="gt">
			<td align="center">ID</td>
			<td align="center">Tên Sản Phẩm</td>
			<td align="center">Đơn Giá</td>
			<td align="center">Hành Động</td>
		</tr>
		<form action="addhw.php" method="POST">
		<tr>
			<td align="center">SP1</td>
			<td align="center">Iphone</td>
			<td align="center">10000</td>
			<td align="center"><a href="addhw.php?maSP=SP1&tenSP=Iphone&donGia=10000" name="add">Add to cart</a></td>
		</tr>
		</form>
		<form action="addhw.php" method="POST">
		<tr>
			<td align="center">SP2</td>
			<td align="center">Laptop</td>
			<td align="center">15000</td>
			<td align="center"><a href="addhw.php?maSP=SP2&tenSP=Laptop&donGia=15000" name="add">Add to cart</a></td>
		</tr>
		</form>
		<form action="addhw.php" method="POST">
		<tr>
			<td align="center" v>SP3</td>
			<td align="center">TV</td>
			<td align="center">30000</td>
			<td align="center"><a href="addhw.php?maSP=SP3&tenSP=iphone 12&donGia=30000" name="add">Add to cart</a></td>
		</tr>
		</form>
		<form action="addhw.php" method="POST">
		<tr>
			<td align="center">SP4</td>
			<td align="center">Sony</td>
			<td align="center">10000</td>
			<td align="center"><a href="addhw.php?maSP=SP4&tenSP=iphone 5&donGia=10000" name="add">Add to cart</a></td>
		</tr>
		</form>
		<form action="addhw.php" method="POST">
		<tr>
			<td align="center">SP5</td>
			<td align="center">Air Conditioner</td>
			<td align="center">12000</td>
			<td align="center"><a href="addhw.php?maSP=SP5&tenSP=iphone 6&donGia=12000" name="add">Add to cart</a></td>
		</tr>
		</form>
	</table>
	</div>
</body>
</html>