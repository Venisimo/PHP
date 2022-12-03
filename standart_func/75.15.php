<?php
$str = 'dfsdsff';
    if (strlen($str) > 5) {
        echo substr($str, 0, 5).'...';
    } else {
        echo $str;
    }
?>