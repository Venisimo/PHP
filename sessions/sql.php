
<style>
    table {
        border-collapse: collapse;
    }
    th {
       border: 1px solid black;
    }
    td {
        border: 1px solid black;
    }
</style>
<table>
<thead>
    <tr>
        <th>Имя</th>
    </tr>
</thead>
<tbody>
<?php
    $host = 'db';
    $user = 'root';
    $pass = '1234';
    $name = 'test';

    $link = mysqli_connect($host, $user, $pass, $name);

$query = 'SELECT `name`, `login` FROM `students`';
$result = mysqli_query($link, $query) or die(mysqli_error($link));
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>'.$row['name'].'</td>';
    echo '</tr>';
}
?>
</tbody>
</table>