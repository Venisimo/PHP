<?php
    $arr = [
        'emloyee1' => 100,
        'emloyee2' => 200,
        'emloyee3' => 300,
        'emloyee4' => 400,
        'emloyee5' => 500,
        'emloyee6' => 600,
        'emloyee7' => 700,
    ];
foreach ($arr as $key => $elem) {
    if ($elem <= 400) {
    $arr[$key] *= 1.1;
    }
    echo $arr[$key].'<br>';
}
?>