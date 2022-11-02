<?php
$day = 3;
if ($day <= 10 && $day > 0) {
    echo '1 декада';
}
elseif ($day <= 20 && $day > 10) {
    echo '2 декада';
}
elseif ($day <= 31 && $day > 20) {
    echo '3 декада';
}
elseif ($day > 31) {
    echo 'неверное число';
}
?>