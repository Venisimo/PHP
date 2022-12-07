<?php
    function delitel($num) {
        $arr = [];
        for($i = 1; $i <= $num; $i++) {
            if ($num % $i == 0) {
                array_push($arr, $i); 
            }
        }
        return array_sum($arr) / count($arr);
    }
    echo delitel(50);
?>