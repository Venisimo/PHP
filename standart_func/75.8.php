<?php
$password = 'fsgdg';
    if (strlen($password) > 5 && strlen($password) < 10) {
        echo 'Пароль подходит';
    } else {
        echo 'Придумайте новый';
    }
?>