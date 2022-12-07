<?php
	function func($arr) {
		$length = count($arr);
		
		for ($i = 0; $i < $length; $i++) {
			if (is_array($arr[$i])) {
				$arr[$i] = func($arr[$i]);
			} else {
				$arr[$i] = $arr[$i] ** 2;
			}
		}
		
		return $arr;
	}
	
	var_dump(func([1, [2, 7, 8], [3, 4], [5, [6, 7]]]));
?>