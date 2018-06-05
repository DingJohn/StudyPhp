<?php
	
	//define的方式定义常量
	define("PI", 3.141592653);
	echo "define的方式定义常量";
	echo PI;

	//const的方式定义常量
	const PI1 = 3.141592654;
	echo "<br>const的方式定义常量";
	echo PI1;

	//分支结构中的常量
	if (true) {
		# code...
		echo "<br>分支结构中的常量";
		define("PI2", 3.141592655);
		echo "define的方式定义常量";
		echo PI2;

			// const PI3 = 3.141592656;
			// echo "const的方式定义常量";
			// echo PI3;
	}

	echo "<h3>",$_SERVER['PHP_SELF'],"</h3>";