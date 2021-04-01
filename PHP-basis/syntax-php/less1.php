<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	//đây là lệnh in ra màn hình
		echo "My very first PHP script!"."<br>";;
		#đây cũng là lệnh in ra màn hình
		echo "Hello World !"."<br>";
		
		ECHO "Hello world with upper case ECHO"."<br>";
		/*
		ví dụ về comment nhiều dòng
		$color="RED";
		$COlor="RED mixes BLUE";
		$COLOR="RED mixes BLUE";
		echo "$color"."<br>";
		echo "$COlor"."<br>";
		echo "$COLOR"."<br>"; */
		//khai báo biến
		$name="nguyen ngoc huy";
		echo "Value của biến name:".$name."<br>";
		$score=10;
		echo "Value của biến score:".$score."<br>";
		$text="W4school";
		echo "i love $text"."<br>";
		$num1=50;
		$num2=51;
		echo "Tổng của $num1 và $num2 là:".$num1+$num2 ."<br>";
		echo "Hiệu của $num1 và $num2 là:".$num1-$num2 ."<br>";
		echo "Tích của $num1 và $num2 là:".$num1*$num2 ."<br>";
		echo "Thương của $num1 và $num2 là:".$num1/$num2 ."<br>";
		$global_var=500;//đây là biến global
		function myTest(){
			echo "variable x inside the bos is:".$global_var."<br>";
		}
		myTest();// lỗi vì biến toàn cục chỉ tồn tại ngoài function
		echo "varibale x outside the box is".$global_var."<br>";
		function myTest2(){
			$local_var=50;// dây là biến local
			echo "variable inside the box is:".$local_var."<br>";
		}
		myTest2()."<br>";
		echo "variable outside the box is:".$local_var."<br>";// lỗi vì đay là biến cục bộ chỉ có value trong function
		$global_var_1=500;
		$global_var_2=50;
		function myTest3(){
			global $global_var_1,$global_var_2;
			$sum=$global_var_1+$global_var_2;
			echo "Sum of $global_var_1 and $global_var_2 equals which are inside the box is:".$sum."<br>";
		}
		echo "Value of global var 1 =".$global_var_1."<br>";
		echo "Value of global var 2 =".$global_var_2."<br>";
		myTest3();
		function myTest4(){
			static $static_var=0;
			echo $static_var;
			$static_var++;// tăng mỗi lần thêm một đơn vị
		}
		myTest4();// output1=0
		myTest4();//output2=1
		myTest4();//output3=2
		myTest4();//output4=3
		$number_test='hi';
		var_dump($number_test)."<br>";
		//mảng trong php
		$cars=array("vins","bmw","audi");
		var_dump($cars)."br";

		class Car {
			  public $color;
			  public $model;
			  public function __construct($color, $model) {
			    $this->color = $color;
			    $this->model = $model;
			  }
			  public function message() {
			    return "My car is a " . $this->color . " " . $this->model . "!";
			  }
			}

			$myCar = new Car("black", "Volvo");
			echo $myCar -> message();
			echo "<br>";
			$myCar = new Car("red", "Toyota");
			echo $myCar -> message()."<br>";
			$string="hi my name is nguyen ngoc huy !!!!!";
			echo "The length of this string is:".strlen($string)."<br>";
			echo "The numer of words in this string is:".str_word_count($string)."<br>";
			echo "Reverse string:".strrev($string)."<br>";
			echo "Look for the position of word huy:".strpos("hi my name is nguyen ngoc huy", "huy")."<br>";
			echo "replace huy with huyen trang".str_replace("huy", "huyen trang", $string)."<br>";

			$int ="233333333";
			var_dump(is_float($int))."<br>";
			var_dump(is_numeric($int))."<br>";
			$x = "23465.768";
			$int_cast = (int)$x;
			echo $int_cast."<br>";
			echo(pi())."<br>";
			echo(min(0, 150, 30, 20, -8, -200))."<br>";
			echo(max(0, 150, 30, 20, -8, -200))."<br>";  
			echo(abs(-6.7))."<br>";  
			echo(round(0.60))."<br>";  // returns 1
			echo(round(0.49))."<br>";  // returns 0
			define("GREETING", "Welcome to W3Schools.com!");
			echo GREETING."<br>";
			define("cars", ["Alfa Romeo","BMW","Toyota"]);
			echo cars[2]."<br>";
			$txt1 = "Hello";
			$txt2 = " world!";
			echo $txt1 . $txt2."<br>";
			echo $txt1.=$txt2."<br>";
			$t=date("H");
			echo $t."<br>";
			$favcolor = "blue";

				switch ($favcolor) {
				  case "red":
				    echo "Your favorite color is red!";
				    break;
				  case "blue":
				    echo "Your favorite color is blue!";
				    break;
				  case "green":
				    echo "Your favorite color is green!";
				    break;
				  default:
				    echo "Your favorite color is neither red, blue, nor green!";
				}

				$x = 1;

				while($x <= 5) {
				  echo "The number is: $x <br>";
				  $x++;
				}
				$colors = array("red", "green", "blue", "yellow");

					foreach ($colors as $value) {

					  echo "$value <br>";
					}
					$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

					foreach($age as $x => $val) {
					  echo "$x = $val<br>";
}
				echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>

</body>
</html>