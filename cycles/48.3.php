<?php
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $sum = 0;
    $mid = 0;
    foreach($arr as $elem) {
        $sum += $elem;
        $mid = ($sum / count($arr));
    }
echo $mid;
?>