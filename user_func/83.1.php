<?php 
    function even($arr) {
        foreach ($arr as $elem) {
            if ($elem % 2 !== 0) {
                return false;
            }  
        }
        return true;
}
var_dump(even([2, 4, 6]));
var_dump(even([2, 3, 4, 5, 6]));
?>