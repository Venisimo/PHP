<?php
	$arr = [1, 2, 3, 4, 5, 6, 7, 8];
	$sum = 0;
	$lenght = count($arr);
	for ($i = 1; $i < $lenght; $i++) {
		$sum += $arr[$i];
	}
	
	echo $sum;
?>