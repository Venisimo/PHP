<?php
	$arr = [1, 2, 3, 4, 5, 6, 7, 8];
    $length = count($arr);
    $length /= 2;
    for($i = 0; $i < $length; $i++) {
        echo $arr[$i].' ';
    }
?>