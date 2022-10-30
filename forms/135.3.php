<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $pass ='12345';
?>
    <form action="135.3.php" method="POST">
        <p>Введите ваше имя</p>
        <input type="text" name="name"><br>
        <p>Введите ваш пароль (12345)</p>
        <input type="password" name="pass2"><br><br>
        <input type="submit">
    </form>   
</body>
</html>
<?php
if (!empty($_POST['pass2'])) {
$pass2 = $_POST['pass2'];
if ($pass != $pass2) {
    echo 'Неверный пароль';
} else {
    echo 'Вход выполнен';
}
}
?>