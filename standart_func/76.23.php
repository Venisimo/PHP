<?php
	$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
	
    sort($arr);
	var_dump($arr);
	rsort($arr);
	var_dump($arr);
    ksort($arr);
	var_dump($arr);
    krsort($arr);
	var_dump($arr);
    natsort($arr);
	var_dump($arr);
?>