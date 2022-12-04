<?php
	$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
    echo array_search('-', $arr).'<br>';
    $result = array_splice($arr, 1, 1);
	var_dump($arr);
?>