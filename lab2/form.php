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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous">
    </script>
    <script src="script.js" defer></script>
</head>

<body class="back">

<div class="form-wrap" align="center">

    <form id="registration" name="registration" onsubmit="return check()" method="post" action="success.php" enctype="multipart/form-data">

        <div class="head">
            Регистрация
        </div>

        <div class="group">
            <input type="text" name="lastname" required>
            <span class="bar"></span>
            <label>Фамилия</label>
        </div>

        <div class="group">
            <input type="text" name="firstname" required>
            <span class="bar"></span>
            <label>Имя</label>
        </div>

        <div class="group">
            <input type="text" name="patronymic" required>
            <span class="bar"></span>
            <label>Отчество</label>
        </div>

        <div class="group">
            <input type="text" name="email" required>
            <span class="bar"></span>
            <label>E-mail</label>
        </div>

        <div class="group">
            <input type="text" name="login" required>
            <span class="bar"></span>
            <label>Логин</label>
        </div>

        <div class="group">
            <input type="password" name="password" required>
            <span class="bar"></span>
            <label>Пароль</label>
        </div>

        <div class="group">
            <input type="password" name="password2" required>
            <span class="bar"></span>
            <label>Повторите пароль</label>
        </div>

        <div class="custom-control custom-radio custom-control-inline">
            <input value="Женский" type="radio" class="custom-control-input" id="femalecheck" name="checksex"
                   checked>
            <label class="custom-control-label" for="femalencheck"> Женский </label>
        </div>

        <div class="custom-control custom-radio custom-control-inline">
            <input value="Мужской" type="radio" class="custom-control-input" id="mancheck" name="checksex">
            <label class="custom-control-label" for="mancheck"> Мужской </label>
        </div>

        <div class="form-group" style="width: 300px; margin-top: 20px">
            <select name="city" class="form-control" id="checkcity" >
                <option>Москва</option>
                <option>Воронеж</option>
                <option>Кисловодск</option>
            </select>
        </div>

        <div class="form-group">
            <textarea class="form-control" id="aboutme" name="aboutme" rows="3" placeholder="Расскажите о себе" style="width: 300px; margin-top: 20px"></textarea>
        </div>

        <div class="form-group">
            <p class="btnSignIn">Прикрепите резюме</p>
            <input type="file" class="form-control-file" name="file" style="width: 300px;">
        </div>

        <button type="submit" class="btn btn-outline-secondary"
                style="margin-bottom: 10px; margin-top: 10px; background-color: #5264AE; color: white; width: 300px">
            Зарегистрироваться
        </button>

        <button type="button" id="clear" class="btnSignIn">Сбросить</button>

    </form>


    <form name="signIn" hidden>

        <div class="head">
            Вход
        </div>

        <div class="group">
            <input type="text" name="login" required>
            <span class="bar"></span>
            <label>Логин</label>
        </div>

        <div class="group">
            <input type="password" name="password" required>
            <span class="bar"></span>
            <label>Пароль</label>
        </div>

        <button type="submit" class="btn btn-outline-secondary"
                style="margin-bottom: 10px; margin-top: 10px; background-color: #5264AE; color: white; width: 300px">
            Войти
        </button>

    </form>

    <button type="button" id="oldAcc" class="btnSignIn">У меня уже есть аккаунт</button>

</div>

<div class="welcome">
    <p style="margin-left: 10px"> Количество посещений данной страницы: <?= $result ?></p>
    <p style="margin-left: 10px"><? if ($result % 10 == 0) echo "Это ваше юбилейное посещение!" ?></p>
    <p style="margin-left: 10px">Вы открыли эту страницу <?= date('d.m.Y в H:i:s') ?></p>
    <p id="welcome" style="font-size: 55px">Добро пожаловать!</p>
    <button class="btndev" onclick="infoOpen()">Узнать больше о разработчике</button>
</div>

</body>
</html>