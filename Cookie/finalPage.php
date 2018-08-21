<?php
// тут я очищаю заказы, после оплаты
include('db.php');
$ip = $_COOKIE['ip_client'];
include('HelpFunction.php');

clear_Bd($ip);

echo '<a href="Basket.php">Вернуться на главную страницу</a>';
?>