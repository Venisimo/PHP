<?php
$age = 28;
if ($age >= 10) {
    if ($age >= 99) {
        echo 'число меньше 10 или больше 99';
    }
    else {
        $age = (string) $age;
        $summ = (int) $age[0] + (int) $age[1];
        if ($summ < 10) {
            echo 'число однозначно'; 
        } 
        else {
            echo 'число двузначно'; 
        } 

}
} else {
    echo 'меньше 10';
}
?>