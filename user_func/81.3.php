<?php
	function func($num) {
		return $num; // выполниться этот, поскольку функция закончила свою работу 
		
		$result = $num * $num;
		return $result;
	}
	
	echo func(3);
?>