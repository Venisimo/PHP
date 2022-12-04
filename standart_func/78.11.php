<?php
	$str = '1234567890';
	$arr = str_split($str, 1);
	$result = array_sum($arr);
	echo $result;
?>