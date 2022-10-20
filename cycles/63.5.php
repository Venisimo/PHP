<?php
    $arr = [
        1 => 125,
        1 => 225,
        1 => 128,
        1 => 356,
        1 => 145,
        1 => 281,
        1 => 452,
    ];
    $arr2 = [];
    
    foreach ($arr as $key => $elem) {
        $str = (string)$elem;
        if ($str[0] == '1' or $str[0] == '2') {
            $arr2[] = $elem;
        }
    }
    var_dump($arr2);
?>