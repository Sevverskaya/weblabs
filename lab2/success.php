<?php

$lastname = htmlentities($_POST['lastname']);
$firstname = htmlentities($_POST['firstname']);
$patronymic = htmlentities($_POST['patronymic']);
$email = htmlentities($_POST['email']);
$login = htmlentities($_POST['login']);
$password = htmlentities($_POST['password']);
$aboutme = htmlentities($_POST['aboutme']);
$checksex = htmlentities($_POST['checksex']);
$city = htmlentities($_POST['city']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Анкета</title>
    <link rel="stylesheet" href="style2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="script.js"></script>
</head>

<style>
    input{
        border:none;
    }
    input:focus {
        outline: none !important;
    }
</style>
<body class="back">
<div class="form-wrap" style="margin-left: 10px; float: left; padding: 10px">
    <h4 style="margin-top: 10px" align="center">Анкета</h4>
    <hr>
    <form method="post" action="savedb.php">
        <p>Фамилия: <input readonly  value="<?= $lastname ?>" name="lastname"></p>
        <p>Имя: <input readonly value="<?= $firstname ?>" name="firstname"></p>
        <p>Отчество: <input readonly value="<?= $patronymic ?>" name="patronymic"></p>
        <p>email: <input readonly value="<?= $email ?>" name="email"></p>
        <p>Логин: <input readonly value="<?= $login ?>" name="login"></p>
        <p>Пол: <input readonly value="<?= $checksex ?>" name="checksex"></p>
        <p>Город: <input readonly value="<?= $city ?>" name="city"></p>
        <p>Обо мне: <input readonly value="<?= $aboutme ?>" name="aboutme"></p>
        <input readonly value="<?= $password ?>" name="password" hidden>

        <button type="submit" class="btn btn-outline-secondary"
                style="margin-bottom: 10px; margin-top: 10px; background-color: #5264AE; color: white; width: 100%">
            Сохранить анкету
        </button>
    </form>


</div>

</body>
</html>
