<?php
$result = 0;
for($i = 1; $i <= 99; $i++) {
    if ($i % 2 != 0) {
        $result += $i;
    }
}
echo $result;
?>