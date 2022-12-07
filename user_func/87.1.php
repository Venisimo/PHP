<?php
function isPrime($div) {
        for($i= 2; $i <= $div; $i++) {
            if ($div % $i === 0) {
            }
        }
    }
	function getPrimeDivisors($num) {
		$result = [];
		$divs = getOwnDivisors($num);
		
		foreach ($divs as $div) {
			if (isPrime($div)) {
				$result[] = $div;
			}
		}
		
		return $result;
	}
echo getPrimeDivisors(50)
?>