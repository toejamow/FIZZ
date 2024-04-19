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

    <main class="adm-editm">
        <section class="adm-edit">

        <div class="orders">

        <h2>Заказы</h2>

        <div class="cat-prod-ord-cont">

        <h3>Заказ №ID</h3>

            <form id="ord-form" action="forms/ordADM.php">

            <label for="user-id">ID клиента</label>
            <input id="user-id" readonly type="text" value=""user-id>

            <input id="date" type="text" value="date">

                <label for="status">Статус заказа</label>
                <select name="status" id="status">
                    <option value="cooking">Готовим</option> 
                    <option value="delivering">Доставка</option> 
                    <option value="finished">Выполнено</option> 
                </select>

                <label for="bonus-u">Использованные баллы</label>
                <input type="text">

                <label for="bonus-a">Полученные баллы</label>
                <input type="text">

            </form>

            </div>

            </div>

        </section>
    </main>

    <?php include ("../connect/footer.php"); ?>

</body>

</html>