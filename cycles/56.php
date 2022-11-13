<?php
$num = 7;
$flag = true;
for ($i=2; $i < $num; $i++) {
    if ($num % $i === 0) {
        $flag = false;
        break;
    }
}
if ($flag == true) {
    echo 'простое';
} else {
    echo 'составное';
}
?>
