<?php
	$arr = [
		'group1'  => ['user11', 'user12', 
			'user13', 'user43'], 
		'group2'  => ['user21', 'user22', 'user23'],
		'group3'  => ['user31', 'user32', 'user33'],
		'group4'  => ['user41', 'user42', 'user43'],
		'group5'  => ['user51', 'user52'],
	];
    foreach ($arr as $key1 => $sub) {
		foreach ($sub as $key2 => $elem) {
			echo $key1 . ' - ' . $elem . '<br>'; 
		}
	}
?>