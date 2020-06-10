<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    table {
        border: 1px solid grey;
        border-collapse: collapse;
    }

    th {
        border: 1px solid grey;
        padding: 5px;
    }

    td {
        border: 1px solid grey;
        padding: 5px;
    }
</style>

<body>
<?php

$tableName = htmlentities($_GET['tablename']);

$host = 'localhost'; // адрес сервера
$database = 'weblabs'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль

$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));


$getColumns = "SHOW COLUMNS FROM $tableName";
$resColumns = mysqli_query($link, $getColumns) or die("Ошибка " . mysqli_error($link));

$getData = "SELECT * FROM $tableName";
$resData = mysqli_query($link, $getData) or die("Ошибка " . mysqli_error($link));


function createTable($resColumns, $resData){

    echo '<table><tr>';
    while ($row = mysqli_fetch_row($resColumns)) {
        echo '<th>' . $row[0] . '</th>';
    }
    echo '</tr>';

    while ($row = mysqli_fetch_row($resData)) {
        $countElements = count($row);

        echo '<tr>';
        for ($i = 0; $i<$countElements; $i++){
            echo '<td>' . $row[$i] . '</td>';
        }
        echo '</tr>';

    }

}
createTable($resColumns, $resData);

?>
</body>
</html>




