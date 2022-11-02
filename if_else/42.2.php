<?php
    $user = ['name' => null, 'surname' => 'dgsdgs'];
	$result = $user['name'] ?? $user['surname'] ?? '';
    echo $result
?>