<?php

require_once __DIR__ . '/www/auth.php';
$login = getUserLogin();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
</head>
<body>
    <?php if ($login === null): ?>
    <a href="/www/login.php">Авторизируйтесь пж</a>
    <?php else: ?>
    Добро пожаловать Юзер <?= $login ?>
    <br>
    <a href="/logout.php">Выйти</a>
    <?php endif; ?>
</body>
</html>