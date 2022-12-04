<?php
	$arr = [1, 2, 3, 4, 5];
	
	$result = array_splice($arr, 3, 0, ['a', 'b', 'c']);
	var_dump($arr);
?>