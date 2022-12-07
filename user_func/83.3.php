<?php
function check($arr) {
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i - 1] === $arr[i]) {
            return true;
        }
    }
    return false;
}
var_dump(check([1, 2, 3, 4, 5, 6, 7, 8, 8]));
?>