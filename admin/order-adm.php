<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Заказы</title>
</head>

<body>

    <nav>
    <a href="index.php">Админ. панель</a>
        <a style="display:flex;" id="logo-link" href="../index.php"><img style="align-self:center;" class="logo"
                src="../images/logo.png" alt="Лого"></a>
        <a href="../reg-auth/exit.php">Выйти</a>
    </nav>

<main>
    <section>
        <form action="forms/ordADM.php">
            <label for=""></label>
            <input type="text">
        </form>
    </section>
</main>

    <?php include ("../connect/footer.php"); ?>

</body>

</html>