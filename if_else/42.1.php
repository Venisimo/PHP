<?php
	$user = ['name' => 'john', 'age' => 30];
	
    $name = $user['name'] ?? 'unkown';
    echo $name
?>