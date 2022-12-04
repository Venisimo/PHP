<?php
$newyear = mktime(0, 0, 0, 1, 1, date('Y') + 1);
$sec = $newyear - time();
$days = floor($sec / (60*60*24));
echo "До нового года осталось: $days дней, капец";
?>