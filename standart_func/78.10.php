<?php
$keys = range('a', 'z');
$elems = range(1, 26);
$arr = array_combine($keys, $elems);
var_dump($arr);
?>