<?php
echo "<h1>Kiểm tra chuỗi Palindrome </h1>";
function Palindrome_checking($chuoi){
	if ($chuoi==strrev($chuoi)) {

		echo "<br><b>$chuoi</b> là chuỗi Palindrome !!!";
	}
	else{
		echo "<br><b>$chuoi</b> không phải chuỗi Palindrome !!!";
	}
}
$chuoi1="ZenttneZ";
Palindrome_checking($chuoi1);
$chuoi2="huyhyhyhyhyhyhy";
Palindrome_checking($chuoi2);
?>
