<?php
	$arr = [1, 2, 3, 4, 5];

    $result = array_splice($arr, 1, 0, ['a', 'b']);
    $result = array_splice($arr, 6, 0, ['с']);
    $result = array_splice($arr, 8, 0, ['e']);
	var_dump($arr);
?>