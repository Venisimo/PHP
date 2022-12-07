<?php
	function func($num) {
		$sum = 0;
		
		for ($i = 1; $i <= $num; $i++) {
			$sum += $i;
			// тут был return $sum; внутри цикла он прокручивается один раз
		}
        return $sum;
    }
	
	echo func(5);
?>