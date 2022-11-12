<?php
$arr = [1=>'пн', 2=>'вт', 3=>'ср', 4=>'чт', 5=>'пт', 6=>'сб', 7=>'вс'];
$day = 7;
foreach ($arr as $key=>$elem) {
    if ($key == $day) {
        echo '<i>'.$elem.'</i>'.'<br>';
} else {
    echo $elem.'<br>';
}
}
?>