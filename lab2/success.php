<?php

if (file_exists('count.txt'))
{
    $file = fopen('count.txt', r);
    $data = fread($file, filesize('count.txt'));
    $result = $data + 1;
    fclose($file);
    $file = fopen('count.txt', w);
    fwrite($file, $result);
}

else
{
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
    <title>Video</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="script.js"></script>
</head>
<body class="back">
<p> Количество посещений данной страницы: <?=$result?></p>
<p><? if($result % 10 == 0) echo "Это ваше юбилейное посещение!"?></p>
<p>Вы открыли эту страницу <?=date('d.m.Y в H:i:s') ?></p>
<div class="video">
    <iframe width="640" height="350" src="https://www.youtube.com/embed/xOXfXaW0Nzw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <button onclick="confirmation()" class="btn btn-outline-secondary" style="margin-top: 30px; float: right">Закрыть</button>
</div>


</body>
</html>
