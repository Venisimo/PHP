<?php
$one = 0;
$two = 1;

for ($i = 0; $i <= 10; $i++) {
    $curent = $one + $two;
    $one = $two;
    $curent = $two;

    echo $curent.'<br>';
}
?>