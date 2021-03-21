<?php
//$_GET
//$_POST
$user='';
$pdw='';
if (isset($_POST['user'])) {
	$user=$_POST['user'];
}
if (isset($_POST['pdw'])) {
	$pdw=$_POST['pdw'];
}
if ($user=='admin'&& $pdw=='123456') {
	echo "dang nhap thanh cong";
}
else{
	echo "dang nhap that bai";
}
?>