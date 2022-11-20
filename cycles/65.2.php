<?php
$one = 0;
$two = 1;
$three = 2;
for ($i = 0; $i <= 10; $i++) {
    $curent = $one + $two + $three;
    $one = $two;
    $two = $three;
    $three = $curent;
    echo $curent.'<br>';
}
?>