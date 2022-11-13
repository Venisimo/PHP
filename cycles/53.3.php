<?php
	$arr = [1, 2, 0, -1, 4, 5, 3, 8, 9, 20, 4];
    $three = 0;
	foreach ($arr as $elem) {
		if ($elem == 3) {
            break;
		}
        $three++;
	}
    echo $three;
?>