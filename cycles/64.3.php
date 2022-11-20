<?php
	$arr = [1, 2, 3, 4, 5];
	$length = count($arr);
	
	for ($i = 2; $i < $length; $i++) {
		echo $arr[$i - 2];
	}
?>