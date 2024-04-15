<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Категории</title>
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

        <h2>Категории</h2>

        <h3>Категория №ID</h3>
            <form action="forms/categADM.php" method="POST" enctype="multipart/form-data">
                <label for="name">Название</label>
                <input id="name" name="name" type="text">

                <input type="submit" value="Сохранить">

            </form>
        </section>
    </main>

    <?php include ("../connect/footer.php"); ?>


</body>

</html>