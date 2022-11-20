<?php
$arr = [1, 2, 5, 11, 12, 5];
$sum = 0;
$mid = 0;
$length = count($arr);	
foreach($arr as $elem) {
    $sum += $elem;
    $mid = $sum / $length;
}
echo $mid;
?>