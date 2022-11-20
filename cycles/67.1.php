<?php
	$arr = [];
	$str = '';
	
	for ($i = 0; $i < 5; $i++) {
		$str .= 'xx';
		$arr[] = $str;
	}
	
	var_dump($arr); 
?>