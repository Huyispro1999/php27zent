<?php
echo "<h1>In mảng theo chiều ngược lại !</h1>";
$arr = array(1,4,2,6,9,100,4,);
echo "<pre>";
print_r($arr);
echo "</pre>";
echo "In các phần tử theo chiều ngược lại là:";
$arr=array_reverse($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";
?>