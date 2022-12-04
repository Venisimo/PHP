<?php
$arr = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
	$day = date('w');
    echo $arr[$day].'<br>';
    $day1 = date('w', mktime(0, 0, 0, 6, 6, 6));
    echo $arr[$day1].'<br>';
    $day2 = date('w', mktime(0, 0, 0, 7, 24, 4));
    echo $arr[$day2];  
?>