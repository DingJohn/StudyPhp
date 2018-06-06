<?php 
	function getSum($num1,$num2){
		return $num1 + $num2;
	}

	echo getSum(23,45);

	echo "<br>静态变量的使用";

	function getSum1(){
		static $num = 1;
		$num++;
		echo $num;
	}

	getSum1();
	getSum1();
	getSum1();
	getSum1();

	echo "<br>PHP的递归<br>";
	function dg($pos){
		if ($pos == 1) {
			# code...
			return 1;
		}elseif ($pos == 2) {
			# code...
			return 2;
		}else{
			return dg($pos -1 ) + dg($pos -2);
		}
	}

	echo dg(4);