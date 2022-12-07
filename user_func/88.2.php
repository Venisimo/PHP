<?php
	function getSum($arr) {
		$sum = array_shift($arr);
		
		if (count($arr) !== 0) {
			$sum += getSum($arr);
		}
		
		return $sum;
	}
	
	var_dump(getSum(['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5]));
?>