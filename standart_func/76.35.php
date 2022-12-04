<?php
	$arr = range(1, 20);
	
	$result = array_chunk($arr, 5);
	var_dump($result);
?>