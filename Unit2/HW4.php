<?php
echo "<h1>Chuẩn hoá chuỗi đầu vào</h1>";
$chuoi1="nguyễn nGọc HUY Đẹp tRai";
echo "<b>Chuỗi chưa chuẩn hoá là</b> :".$chuoi1;
echo "<br>";
$lower=strtolower($chuoi1);
echo "<br>";
$trim=trim($lower);
$ucw=ucwords($trim);
$result=$ucw.'.';
echo "<b>Chuỗi sau chuẩn hoá là</b> :".$result;

?>