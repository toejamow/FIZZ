<?php
include ("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Авторизация</title>
</head>

<body>

    <div class="reg-cont">

        <div class="reg-inside">

            <h2>Регистрация</h2>

            <form class="form-user" id="formREG" action="regDB.php" method="post">
                <label for="email">Эл. почта</label>
                <input class="data-input" id="email" type="email" placeholder="Введите эл. почту">

                <label for="password">Пароль</label>
                <input class="data-input" id=" password" type="password" placeholder="Введите пароль">

                <input id="button-form" type="submit" value="Зарегистрироваться">
            </form>

            <div class="sign-in">
                <p>Уже зарегистрированы?</p> <a href="authorization.php">Войти</a>
            </div>
        </div>
    </div>

    <?php include ("footer.php"); ?>


</body>

</html>