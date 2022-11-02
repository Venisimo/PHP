<?php
session_start();
if (isset($_SESSION['time']) == false) {
echo 'первое посещание!';
}
else {
echo time() - $_SESSION['time'];
}
$_SESSION['time'] = time();
?>