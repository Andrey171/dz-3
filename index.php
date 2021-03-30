<?php require_once "form.php" ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="text-align: center ">
        <form action="./" method="post">
            <input type="text" name="name" placeholder="Имя"/> <br>
            <input type="text" name="surname" placeholder="Фаммилия"/> <br>
            <input type="text" name="login" placeholder="Логин"/> <br>
            <input type="text" name="password" placeholder="Пароль" /> <br> <br>
            <button type="submit">
                Submit
            </button>
        </form><br>
        <?php $validate= valid($_POST)?>

        <?php foreach ($validate as $value):?>
            <?php echo $value.PHP_EOL;?> <br>
        <?php endforeach;?>
    </div>
</body>
</html>