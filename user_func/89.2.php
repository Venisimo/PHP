<?php
	function func($arr) {
		$sum = 0;
		
		foreach ($arr as $elem) {
			if (is_array($elem)) {
				$sum += func($elem);
			} else {
				$sum += $elem;
			}
		}
		
		return $sum;
	}
	
	var_dump(func([1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]])); 
?>