<?php
	$arr = [1, 2, 3, 0, -1, 4, 5];
	$sum = 0;
	foreach ($arr as $elem) {
		if ($elem < 0) {
            break;
		}
        $sum += $elem;
	}
    echo $sum;
?>