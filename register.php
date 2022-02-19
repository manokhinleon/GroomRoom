<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GroomRoom</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    include 'nav.php';
    nav(2)
    ?>
    <div class="register">
        <form action="registration.php" class="form" method="POST">
            <input type="text" placeholder="ФИО" name="fio">
            <input type="text" placeholder="Логин" name="login">
            <input type="email" placeholder="email" name="mail">
            <input type="password" placeholder="Пароль" name="password">
            <input type="password" placeholder="Повтор пароля" name="confirm">
            <label><input type="checkbox">Согласие на обработку ПД</label>
            <button>Зарегистрироваться</button>

        </form>

    </div>
</body>
</html>