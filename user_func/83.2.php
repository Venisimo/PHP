<?php 
    function even($num) {
        $arr = str_split($num);
        for ($i = 0; $i < count($arr);  $i++) {
            $arr[$i] = (int)$arr[$i];
        }
        var_dump($arr);
        foreach ($arr as $elem) {
            if ($elem % 2 === 0) {
                return false; //хотя бы одно четное
            }  
        }
        return true; //все числа нечетные 
}
echo even(3575);
?>