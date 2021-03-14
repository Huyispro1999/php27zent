<?php
	echo "<h1>Sắp xếp mảng theo thứ tự tăng dần</h1>";
	$arr = array(1,4,2,6,9,100,4,);
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	sort($arr);
	echo "Mang theo thứ tự tăng dần là:";
	echo "<pre>";
	print_r($arr);
	echo "</pre>";	

?>