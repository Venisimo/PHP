<?php
    $sum = 0;
	$arr = [[1, 2, 3], [4, 5, 6, 7], [8, 9]];
    foreach ($arr as $sub) {
		foreach ($sub as $elem) {
			$sum += $elem;
		}
	}
    echo $sum;
?>