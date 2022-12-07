<?php
	function func($arr) {
		$sum = '';
		
		foreach ($arr as $elem) {
			if (is_array($elem)) {
				$sum .= func($elem);
			} else {
				$sum .= $elem;
			}
		}
		
		return $sum;
	}
	
	var_dump(func(['a', ['b', 'c', 'd'], ['e', 'f', ['g', ['j', 'k']]]])); 
?>