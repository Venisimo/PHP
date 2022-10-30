<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="135.2.php" method="POST">
        <p>Введите ваше имя</p>
        <input type="text" name="name"><br>
        <p>Введите ваш возраст</p>
        <input type="text" name="age"><br><br>
        <input type="submit">
    </form>   
</body>
</html>
<?php
if (!empty($_POST['name']) && !empty($_POST['age'])) {
$name = $_POST['name'];
$age = $_POST['age'];
if (!is_numeric($age) || is_numeric($name)) die('Некорректные данные'); 

echo 'Ваше имя: '. $name .' '.'Ваше возраст: '. $age;
}
?>