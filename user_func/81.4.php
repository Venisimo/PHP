<?php
	function func($num) {
		if ($num <= 0) {
			return abs($num);
		} else {
			return $num * $num;
		}
	}
	
	echo func(10); // 100 выполниться условие else
	echo func(-5);  // 5 выполниться условие if 
?>