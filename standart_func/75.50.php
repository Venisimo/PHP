<?php
$str = '';
$len = 5;
for ($i = 1; $i <= $len; $i++) {
$str .= chr(rand(97, 122));
}
echo $str;
?>