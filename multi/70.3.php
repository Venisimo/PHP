<?php
	$arr = [
		[
			'name'   => 'user1',
			'age'    => 30,
			'salary' => 1000,
		],
		[
			'name'   => 'user2',
			'age'    => 31,
			'salary' => 2000,
		],
		[
			'name'   => 'user3',
			'age'    => 32,
			'salary' => 3000,
		],
	];
	foreach ($arr as $key1 => $sub) {
		foreach ($sub as $key2 => $elem) {
			echo $key2 . '-' . $elem . '<br>'; 
		}
	}

?>