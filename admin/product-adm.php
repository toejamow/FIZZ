<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Продукты</title>
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

        <h2>Продукты</h2>

        <div class="products">

        <h3>Продукт №ID</h3>

        </div>

        <div class="create">

        <form action="forms/prodADM.php" method="POST" enctype="multipart/form-data">
                <label for="name">Название</label>
                <input id="name" name="name" type="text">

                <label for="descr">Описание</label>
                <input id="descr" name="descr" type="text">

                <label for="categ">Категория</label>
                <select name="categ" id="categ">
                    <option value="1">1</option>
                </select>

                <label for="price">Цена</label>
                <input id="price" name="price" type="text">

                <label for="image">Изображение</label>
                <input type="file" id="image" name="image" accept="image/*" >

                <input type="submit" value="Сохранить">

            </form>

        </div>

        

            

        </section>
    </main>

    <?php include ("../connect/footer.php"); ?>


</body>

</html>