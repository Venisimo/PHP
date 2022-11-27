<?php
	$arr = [];
    for ($i = 0, $k = 1; $i < 2; $i++) {
		$arr[$i] = [];
		for ($j = 0; $j < 2; $j++) {
			$arr[$i][$j] = [];
			for ($n = 0; $n < 2; $n++) {
			$arr[$i][$j][$n] = $k++;
			}
		}
	}
	
	var_dump($arr);
?>