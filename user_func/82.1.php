<?php
	function getSqrtSum($arr) {
		$sum = 0;
		
		foreach ($arr as $elem) {
			$sum += sqrt($elem);
		}
		
		return $sum;
	}
	
	$arr1 = [1, 2, 3, 4];
	$arr2 = [5, 6, 7, 8];
	
	echo getSqrtSum($arr1).'<br>';
	echo getSqrtSum($arr2);
?>