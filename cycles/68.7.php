<?php
$arr = [1, 2, -3, -4, 5, 11, 12, 5];
	
foreach($arr as $elem) {
    if ($elem == 5) {
    echo 'есть';
    break;
    }
}
?>