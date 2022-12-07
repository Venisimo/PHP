<?php
    function getDivisors($num) {
        $arr = [];
        for ($i = 1; $i <= $num; $i++) {
        if($num % $i == 0) {
            array_push($arr, $i);
        }
    }
    return var_dump($arr);    
}
getDivisors(20);
?>