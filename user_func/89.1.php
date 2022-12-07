<?php
	function func($arr) {
		foreach ($arr as $elem) {
			if (is_array($elem)) {
			} else {
				echo $elem.'<br>';
			}
		}
	}
	
	func([1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]]);
?>