<?php
	$arr = [1, 2, 3, 0, 4, 5];
	
	foreach ($arr as $elem) {
		if ($elem == 0) {
            break;
		}
        echo $elem.'<br>';
	}
?>