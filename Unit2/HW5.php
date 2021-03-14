<?php
echo "<h1>Tách họ, tên đệm và tên từ chuỗi !!!</h1>";
$ho_ten='Nguyễn Văn Lươn Ngọc Huy';
echo "<b>Họ và tên đầy đủ là</b>:".$ho_ten;
// echo "<br>";
$mang_ho_ten=explode(" ",$ho_ten );
$so_phan_tu=count($mang_ho_ten);
$ho=$mang_ho_ten[0];
$ten=$mang_ho_ten[$so_phan_tu-1];
$ten_dem="";
for ($i=1; $i <$so_phan_tu-1 ; $i++) { 
	$ten_dem=$ten_dem.$mang_ho_ten[$i]." ";
}
echo "<br><b>Họ</b>:".$ho;
echo "<br><b>Tên đệm</b>:".$ten_dem;
echo "<br><b>Tên</b>:".$ten;

?>