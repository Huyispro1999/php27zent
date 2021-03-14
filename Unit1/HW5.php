<?php 
// Viết chương trình in ra tổng của 10 số chẵn đầu tiên.
 
	$Sum =0;
	$count= 0;


	for ($i = 0; $i < 100; $i++) {
	   if ($i%2==0) {
	   	$count++;
	   	$Sum=$Sum+$i;
	   	if ($count>=10) {
	   		break;
	   	}
	   	
	   }
	}
	echo "Tổng của 10 số chẵn đầu tiên là: " . $Sum;

 ?>