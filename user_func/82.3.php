<?php
    function delElem($num) {
        $arr = [1, 2, 3, 4, 5];
        foreach($arr as $key => $item) {
            if ($item == $num) {
                unset($arr[$key]);
                return var_dump($arr);
            }
        }
    }
    delElem(3);
?>