<?php
// $names=array('Nga','Khue','Minh',10,0.05);
// var_dump($names);
// echo "<pre>";
// print_r ($names);
// echo "</pre";
// // khai báo tuần tự
// $info_huy=array();
// $info_huy['name']='Huy';
// $info_huy['hometown']='Hung Yen';
// $info_huy['age']=18;
// $info_huy['school']='VNU';
// echo "<br> Tên:".$info_huy['name'];
// echo "<br> Tuổi:".$info_huy['age'];
// echo "<br> Quê:".$info_huy['hometown'];
// echo "<br> Trường:".$info_huy['school'];
// echo "<pre>";
// print_r($info_huy);
// echo "</pre>";
// foreach ($info_huy as $key => $value) {
// 	echo "<br>Key:".$key."-value:".$value;
// }
// foreach ($info_huy as $key ) {
// 	echo "<br>Key:".$key;
// }
// mảng nhiều chiều
// $info= array();
// $info[0]='huy';
// $info[1]='111111';
// $info[3]=10;
// $info[4]=array();
// $info[4][0]=array('gia tri = 10');
// $info[4][1]=array('gia tri = 11');
// echo "<pre>";
// print_r($info);
// echo "</pre>";
// echo "<br>Mang 3 chieu :".$info[4][0][0];
// echo "<br>Mang 3 chieu :".$info[4][1][0];
// //hamf
function kt_chanle($number){
	if($number%2==0){
		echo "<br>So chan";
	}
	else{
		echo "<br>So le";
	}
}
$number1=0;
kt_chanle($number1);
$number2=5;
kt_chanle($number2);
$number3=99;
kt_chanle($number3);
function tinhtong ($input){
	$sum=0;
	foreach ($input as $value) {
		$sum+=$value;
		# code...
	}
	return $sum;
}
$arr=array(1,4,5,6,6,7);
echo "<br> Tong=".tinhtong($arr);


?>




