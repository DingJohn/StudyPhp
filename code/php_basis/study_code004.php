<?php

	$sex = "女";

	if ($sex == "男") {
		# code...
		echo "胜似潘安";
	}elseif ($sex =="女") {
		# code...
		echo "闭月羞花";
	}else{
		echo "未知";
	}

	for ($i=0; $i <10 ; $i++) { 
		# code...
		echo "<br>第",$i,"次";
	}

	$table = "<table border='1' rules='all' width='500' height='500'";
	for ($i=1; $i <= 9; $i++) { 
		# code...
		$table .= "<tr>";
		for ($j= 1 ; $j <= $i ; $j++ ) { 
			# code...
			$cj = $i*$j;
			$table .= "<td>$j*$i=$cj</td>";
		}
		$table .= "</tr>";
	}
	$table .= "</table>";

	echo $table;


	// 百钱百鸡
	$count = 0;
	for ($k=1; $k <= 100; $k++) { 
		# code...
		for ($m=1; $m <= 100-$k; $m++) { 
			# code...
			for ($l=1; $l <= 100-$k-$m; $l++) { 
				# code...
				++$count;
				if ($k+$m+$l==100) {
					# code...
					if ($k*5+$m*3+$l/3==100) {
						# code...
						echo "百钱百鸡包括 $k 只公鸡$m 只母鸡，$l 只小鸡，总共计算$count 次<br>";
					}
				}
			}
		}
	}