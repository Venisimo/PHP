<?php
    for ($i = 1; $i < 2030; $i++){
        if (getDigitsSum($i));
    }
	function getDigitsSum($num) {
		return array_sum(str_split($num, ''));
	}
?>