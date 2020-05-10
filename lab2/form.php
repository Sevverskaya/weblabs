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

    <form name="registration" onsubmit="return check()">

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
            <input type="radio" class="custom-control-input" id="defaultInline1" name="inlineDefaultRadiosExample"
                   checked>
            <label class="custom-control-label" for="defaultInline1"> Женский </label>
        </div>

        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="defaultInline2" name="inlineDefaultRadiosExample">
            <label class="custom-control-label" for="defaultInline2"> Мужской </label>
        </div>

        <button type="submit" class="btn btn-outline-secondary"
                style="margin-bottom: 10px; margin-top: 10px; background-color: #5264AE; color: white; width: 300px">
            Зарегистрироваться
        </button>

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
    <p id="welcome" style="font-size: 55px">Добро пожаловать!</p>
    <button class="btndev" onclick="infoOpen()">Узнать больше о разработчике</button>
</div>

</body>
</html>