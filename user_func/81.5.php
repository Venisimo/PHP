<?php
	function func($num) {
		if ($num <= 0) {
			return abs($num);
		}
		
		return $num * $num;
	}
	
	echo func(10); //выполнится без условия
	echo func(-5); //выполнится условие if
?>