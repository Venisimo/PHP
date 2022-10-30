<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="135.4.php" method="POST">
        <p>Введите год рождения</p>
        <input type="text" name="age"><br><br>
        <p>Введите месяц рождения</p>
        <input type="text" name="month"><br>
        <p>Введите день рождения</p>
        <input type="text" name="day"><br><br>
        <input type="submit">
    </form>   
</body>
</html>
<?php
if (!empty($_POST['name']) && !empty($_POST['age'])) {
$month = $_POST['month'];
$age = $_POST['age'];
$day = $_POST['day'];
if (!is_numeric($age) || !is_numeric($month) || !is_numeric($day)) die('Некорректные данные'); 


}
?>