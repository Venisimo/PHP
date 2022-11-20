<?php
	$arr = [1, 2, 3, 4, 5];
	$length = count($arr);
	
	for ($i = 1; $i < $length - 1; $i++) {
		echo $arr[$i - 1] +  $arr[$i + 1] + $arr[$i];
	}
?>