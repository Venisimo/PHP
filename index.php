<?php 
	$a = 4;
	$b = 2;
	$c = -1;
	$D = $b**2 - 4*$a*$c;
	if ($D > 0) {
			$x1 = -$b + sqrt($D) / 2 * $a;
			$x2 = -$b - sqrt($D) / 2 * $a;
			echo 'x1 = '.$x1.'<br>x2 = '.$x2;
	}
	else if ($D == 0) {
			$x = -$b / 2*$a;
			echo 'x = '.$x;
	}
	else {
			echo 'Действительных корней нет!!';
		}
?>
