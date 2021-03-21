<?php
	session_start();

	$products= $_SESSION['cart'];

	
	
	function convert_number_to_words($number) {
 
$hyphen      = ' ';
$conjunction = '  ';
$separator   = ' ';
$negative    = 'âm ';
$decimal     = ' phẩy ';
$dictionary  = array(
0                   => 'Không',
1                   => 'Một',
2                   => 'Hai',
3                   => 'Ba',
4                   => 'Bốn',
5                   => 'Năm',
6                   => 'Sáu',
7                   => 'Bảy',
8                   => 'Tám',
9                   => 'Chín',
10                  => 'Mười',
11                  => 'Mười một',
12                  => 'Mười hai',
13                  => 'Mười ba',
14                  => 'Mười bốn',
15                  => 'Mười năm',
16                  => 'Mười sáu',
17                  => 'Mười bảy',
18                  => 'Mười tám',
19                  => 'Mười chín',
20                  => 'Hai mươi',
30                  => 'Ba mươi',
40                  => 'Bốn mươi',
50                  => 'Năm mươi',
60                  => 'Sáu mươi',
70                  => 'Bảy mươi',
80                  => 'Tám mươi',
90                  => 'Chín mươi',
100                 => 'trăm',
1000                => 'ngàn',
1000000             => 'triệu',
1000000000          => 'tỷ',
1000000000000       => 'nghìn tỷ',
1000000000000000    => 'ngàn triệu triệu',
1000000000000000000 => 'tỷ tỷ'
);
 
if (!is_numeric($number)) {
return false;
}
 
if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
// overflow
trigger_error(
'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
E_USER_WARNING
);
return false;
}
 
if ($number < 0) {
return $negative . convert_number_to_words(abs($number));
}
 
$string = $fraction = null;
 
if (strpos($number, '.') !== false) {
list($number, $fraction) = explode('.', $number);
}
 
switch (true) {
case $number < 21:
$string = $dictionary[$number];
break;
case $number < 100:
$tens   = ((int) ($number / 10)) * 10;
$units  = $number % 10;
$string = $dictionary[$tens];
if ($units) {
$string .= $hyphen . $dictionary[$units];
}
break;
case $number < 1000:
$hundreds  = $number / 100;
$remainder = $number % 100;
$string = $dictionary[$hundreds] . ' ' . $dictionary[100];
if ($remainder) {
$string .= $conjunction . convert_number_to_words($remainder);
}
break;
default:
$baseUnit = pow(1000, floor(log($number, 1000)));
$numBaseUnits = (int) ($number / $baseUnit);
$remainder = $number % $baseUnit;
$string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
if ($remainder) {
$string .= $remainder < 100 ? $conjunction : $separator;
$string .= convert_number_to_words($remainder);
}
break;
}
 
if (null !== $fraction && is_numeric($fraction)) {
$string .= $decimal;
$words = array();
foreach (str_split((string) $fraction) as $number) {
$words[] = $dictionary[$number];
}
$string .= implode(' ', $words);
}
 
return $string;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</head>
<body>
	
	<div class="container">
		<a href="index1.php">Quay lại danh sách sản phẩm</a>
	<table class="table">
	 <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Mã sản phẩm</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Đơn giá</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Thành tiền</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  		$i=0;
  		$tong=0;
  		foreach ($products as $product) {
  			$i++;
  			$tong+=$product['soLuong']*$product['donGia'];	
  	?>
  	<tr>
  	  <td><?=$i?></td>
      <td><?=$product['maSP']?></td>
      <td><?=$product['tenSP']?></td>
      <td><?=number_format($product['donGia'])?></td>
      <td>
      	<a href="add2cart.php?maSP=<?=$product['maSP']?>" class="btn btn-success">+</a>
      	<?=$product['soLuong'] ?>
      	<a href="delete.php?maSP=<?=$product['maSP']?>&type=0" class="btn btn-danger">-</a>
      </td>
      <td align="right"><?=number_format($product['soLuong']*$product['donGia'])?></td>
      <td align="right"><a href="delete.php?maSP=<?=$product['maSP']?>&type=1" class="btn btn-danger">Xoá khỏi giỏ hàng</a></td>
  	</tr>
  	<?php } ?>
  	<tr>
  		<td colspan="3"><b>Bằng số</b></td>
  		<td colspan="3" align="right"><?= number_format($tong) ?> VNĐ</td>
  	</tr>
  	<tr>
  		<td colspan="3"><b>Bằng chữ</b></td>
  		<td colspan="3" align="right"><?= convert_number_to_words($tong) ?> đồng</td>
  	</tr>
  	<tr>
  		<td>
  			<a href="" class="btn btn-success" id="thanhtoan">Thanh toán</a>
  		</td>
  	</tr>
  </tbody>
  </table>
  </div>
</body>
</html>