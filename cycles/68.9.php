<?php
$arr = [1, 2, 5, 11, 12, 5];
$sum = 0;	
foreach($arr as $elem) {
    $sum += ($elem ** 2);
}
echo $sum;
?>