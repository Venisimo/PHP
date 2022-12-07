<?php
function func($arr) {
    var_dump(array_shift($arr));  
    var_dump($arr);   
    
    var_dump(array_shift($arr));  
    var_dump($arr);  
    
    var_dump(array_shift($arr));  
    var_dump($arr); 
    
    var_dump(array_shift($arr));  
    var_dump($arr); 

    var_dump(array_shift($arr));  
    var_dump($arr); 
}
	func(['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5]); 
?>