<?php
    $http = 'http://';
    $https = 'https://';
    if (substr($http,  0) == 'http://' && substr($https,  0) == 'https://') {
        echo '!';
    } else {
        echo 'No';
    }
?>