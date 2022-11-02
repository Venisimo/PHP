<?php 
$num = 123123;
$num = (string) $num;
if (($num[0] + $num[1] + $num[2]) == ($num[3] + $num[4] + $num[5])) {
    echo 'суммы равны';
}
else {
    echo 'суммы не равны';
}