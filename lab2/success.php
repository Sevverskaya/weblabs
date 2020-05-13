<?php

if (file_exists('count.txt')) {
    $file = fopen('count.txt', r);
    $data = fread($file, filesize('count.txt'));
    $result = $data + 1;
    fclose($file);
    $file = fopen('count.txt', w);
    fwrite($file, $result);
} else {
    $file = fopen('count.txt', w);
    fwrite($file, 1);
    $result = 1;
    fclose($file);
}

$lastname = htmlentities($_POST['lastname']);
$firstname = htmlentities($_POST['firstname']);
$patronymic = htmlentities($_POST['patronymic']);
$email = htmlentities($_POST['email']);
$login = htmlentities($_POST['login']);
$password = htmlentities($_POST['password']);
$aboutme = htmlentities($_POST['aboutme']);
$checksex = htmlentities($_POST['checksex']);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Video</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="script.js"></script>
</head>
<body class="back">
<p style="margin-left: 10px"> Количество посещений данной страницы: <?=$result?></p>
<p style="margin-left: 10px"><? if($result % 10 == 0) echo "Это ваше юбилейное посещение!"?></p>
<p style="margin-left: 10px">Вы открыли эту страницу <?=date('d.m.Y в H:i:s') ?></p>

<div class="form-wrap" align="center" style="float: left; margin-left: 10px">
    <h4 style="margin-top: 10px">Анкета</h4>
    <hr>
    <p>Фамилия: <?=$lastname?></p>
    <p>Имя: <?=$firstname?></p>
    <p>Отчество: <?=$patronymic?></p>
    <p>email: <?=$email?></p>
    <p>Логин: <?=$login?></p>
    <p>Пол: <?=$checksex?></p>
    <p>Обо мне: <?=$aboutme?></p>


</div>


</body>
</html>
