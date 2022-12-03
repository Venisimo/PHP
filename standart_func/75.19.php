<?php
    echo strtr('123', ['1'=>'a', '2'=>'b', '3'=>'c']).'<br>';
    echo strtr('123', '123', 'abc');
?>