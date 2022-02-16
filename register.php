<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GroomRoom</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js" defer></script>
</head>
<body>
    <?php
    include 'nav.php';

    ?>
    <div class="register">
        <form action="registeracrtion.php" class="form" method="POST">
            <input type="text" placeholder="ФИО" name="fio">
            <input type="text" placeholder="Логин" name="login">
            <input type="text" placeholder="Email" name="email">
            <input type="text" placeholder="Пароль" name="password">
            <input type="text" placeholder="Еще раз пароль" name="confirm">
            <labe><input type="checkbox" id="pd">Согласие на обработку ПД</label>
            <button>Зарегестрироваться</button>
            <p id="error" class="error"></p>
        </form>        
    </div>
</body>
</html>