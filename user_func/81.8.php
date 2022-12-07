<?php
	function func($num1, $num2) {
		if ($num1 > 0 and $num2 > 0) {
			return $num1 * $num2;
		} else {
			return $num1 - $num2;
		}
		
	}
	
	echo func(3, 4);
?>