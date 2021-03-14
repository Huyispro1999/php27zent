<?php
echo "<h1>Tìm phần từ lớn nhất trong mảng !</h1>";
$arr = array(1,4,2,6,9,100,45,8,20); 
echo "<pre>";
print_r($arr);
echo "</pre>";
$max=$arr[0];
for ($i=0; $i <count($arr)-1 ; $i++) { 
	if ($max < $arr[$i]) {
		$max = $arr[$i];
	}
}
echo "Phần tử lớn nhất trong mảng:".$max;
?>