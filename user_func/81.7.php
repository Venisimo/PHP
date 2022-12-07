<?php
    function func() {
        $num2 = 0;
        $num = 1000;
        for ($i = 0; $num > 10; $i++) {
            $num2 = ($num /= 2);
        }
        return $i;
    }
    echo 'количество итераций: '. func();