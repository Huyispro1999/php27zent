<?php 
	echo "<table align='center' border='1' cellspacing='1'bgcolor='yellow'>";
	  	for($i = 1; $i <= 10; $i++) {
	      	echo "<tr>";
	      	for($j = 2; $j < 10; $j++) {
	          	echo "<td> $j x $i = ".($j*$i)."</td>";
	      	}
	     	echo "</tr>";
	  }
  	echo "</table>";
 ?>