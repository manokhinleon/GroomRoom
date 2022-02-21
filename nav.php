<?php
function nav($item)
{
    $items = [
        "index.php" => "Главная",
        "login.php" => "Вход",
        "register.php" => "Регистрация",
        "admin.php" => "Админ панель",
        "lk.php" => "Личный кабинет",
        "logout.php" => "Выход",
    ];
    echo "<nav>";
    $i = 0;
    foreach ($items as $key => $value)
    {
        if ($i == $item)
        echo "<a href='$key' class='active' >$value</nav>";
        else
        echo "<a href='$key'>$value</nav>";
        $i++;
    }
    echo "</nav>";
}

?>
