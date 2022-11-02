<?php
$mounth = 1;
if ($mounth >= 3 && $mounth <= 5){
    echo 'весна';
}
elseif ($mounth >= 6 && $mounth <= 8){
    echo 'лето';
}
elseif ($mounth >= 9 && $mounth <= 11){
    echo 'осень';
}
elseif ($mounth == 1 || $mounth == 12 || $mounth == 2){
    echo 'зима';
}
?>