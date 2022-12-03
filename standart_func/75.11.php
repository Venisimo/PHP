<?php
    $str = 'http://';
    if (substr($str,  0) == 'http://') {
        echo '!';
    } else {
        echo 'No';
    }
?>