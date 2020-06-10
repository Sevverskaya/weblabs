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


$host = 'localhost'; // адрес сервера
$database = 'weblabs'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль

$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));

$checkLogin = "SELECT * FROM user WHERE login = '$login'";
$checkResult = mysqli_query($link, $checkLogin) or die("Ошибка " . mysqli_error($link));

if (mysqli_num_rows($checkResult) < 1) {
    $query1 = "INSERT INTO user VALUES(NULL, '$lastname', '$firstname','$patronymic', '$email', '$login', '$password', '$checksex', '$city', '$aboutme')";
    $result1 = mysqli_query($link, $query1) or die("Ошибка " . mysqli_error($link));

    $query2 = "SELECT * FROM user WHERE login = '$login'";
    $result2 = mysqli_query($link, $query2) or die("Ошибка " . mysqli_error($link));
    $success = 1;
}
else{$success = 0;}

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
<body class="back">

<div style="width: 100%; height: 30px; background-color: antiquewhite; text-align: center; padding-top: 5px;">
    <?
    if ($success == 1) {
        echo "<span style='color:blue;'>Данные успешно сохранены</span>";
    }
    else{echo "<span style='color:blue;'>Анкета с таким логином уже существует</span>";}
    ?>

</div>

<?if ($success == 1 ) {?>
<div style="text-align: center; margin-top: 10px;">
    <button value="Показать Анкету" type="submit" class="btn btn-outline-secondary"
            style="background-color: #5264AE; color: white;">
        Показать Анкету
    </button>
</div>
<?}?>

<div class="form-wrap" style="margin-left: 10px; float: left; padding: 10px; text-align: center">
    <h4 style="margin-top: 10px" align="center">Анкета</h4>
    <hr>

    <?
    if ($success == 1) {
        while ($row = mysqli_fetch_array($result2)) {
            echo "Фамилия: " . $row['lastname'] . "<br>";
            echo "Имя: " . $row['name'] . "<br>";
            echo "Отчество: " . $row['patronymic'] . "<br>";
            echo "email: " . $row['email'] . "<br>";
            echo "Логин: " . $row['login'] . "<br>";
            echo "Пол: " . $row ['sex'] . "<br>";
            echo "Город: " . $row['city'] . "<br>";
            echo "Обо мне: " . $row ['about'] . "<br>";
        }
    }
    ?>
</div>

<script>
    $(function () {
        $(document).ready(function () {
                $('.form-wrap').hide();
                $('button').click(function () {
                    $('button').hide();
                    $('.form-wrap').show();
                });
        });

    })
</script>
</body>