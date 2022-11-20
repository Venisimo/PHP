<?php
for ($i = 5; $i >= 1; $i--)  {
    $str = '';
    for ($j = 0; $j < $i; $j++) {
        $str .= 'xx';
    }
    echo $str . '<br>';
}
?>