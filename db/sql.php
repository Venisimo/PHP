
<style>
    table {
        border-collapse: collapse;
    }
    th {
       border: 1px solid black;
       text-align: center;
       padding: 10px;
       background-color: green;
    }
    td {
        border: 1px solid black;
        text-align: center;
    }
    tbody>tr:nth-child(odd) {
        background-color: #c9bdad;
    }
    tbody>tr:nth-child(even) {
        background-color: #8c705e;
    }
</style>
<table>
<thead>
    <tr>
        <th>№</th>
        <th>Имя</th>
        <th>Логин</th>
        <th>Возраст</th>
        <th>Группа</th>
    </tr>
</thead>
<tbody>
<?php
    $host = 'db';
    $user = 'root';
    $pass = '1234';
    $name = 'test';

    $link = mysqli_connect($host, $user, $pass, $name);

if (!empty($_POST)) {
    $name = $_POST['name'];
    $login = $_POST['login'];
    $age = $_POST['age'];    
    $id_group = $_POST['ID_GROUP'];
    $query = sprintf("INSERT INTO `students` (`name`, `login`, `age`, `ID_GROUP`) VALUES ('%s', '%s',%d,%d)", $name,$login,$age,$id_group);   
    mysqli_query($link, $query) or die(mysqli_error($link));
}

$query = 'SELECT s.`ID`, s.`name`, s.`login`, s.`age`, g.`name` AS `group` FROM `students` AS s JOIN `groups` as g ON g.ID = s.ID_GROUP;';
$result = mysqli_query($link, $query) or die(mysqli_error($link));
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>'.$row['ID'].'</td>';
    echo '<td>'.$row['name'].'</td>';
    echo '<td>'.$row['login'].'</td>';
    echo '<td>'.$row['age'].'</td>';
    echo '<td>'.$row['group'].'</td>';
    echo '</tr>';
}
?>
</tbody>
</table>
<br>
<form action="sql.php" method="POST">
    <input type="text" name="name" placeholder="Имя">
    <input type="text" name="login" placeholder="Логин">
    <input type="text" name="age" placeholder="Возраст">
    <select name="group">
    <?php
        $query = 'SELECT `ID`, `name` FROM `groups`';
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option>'.$row['name'].'</option>';
        }
    ?>
    </select><br>
    <input type="submit">
</form>