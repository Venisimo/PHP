<?php
	$arr = [];
	
	for ($i = 0; $i < 3; $i++) {
        $arr[$i] = [];
		for ($j = 0; $j < 2; $j++) {
            $arr[$i][$j] = []; 
			    for ($n = 0; $n < 5; $n++) {
                $arr[$i][$j][$n] = $n + 1; 
		        }
        }
	}
	
	var_dump($arr);
?>