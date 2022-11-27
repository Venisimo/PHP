<?php
    $sum = 0;
	$arr = [
		[
			[1, 2, 3],
			[6, 7, 8],
			[3, 8, 4],
			[6, 7, 9],
		],
		[
			[9, 1, 2],
			[4, 5, 6],
		],
		[
			[9, 1, 2],
			[4, 5, 6],
			[5, 6, 3],
		],
	];
    foreach ($arr as $sub) {
		foreach ($sub as $subsub) {
			foreach ($subsub as $elem) {
				$sum += $elem;
			}
		}
	}
    echo $sum;
?>