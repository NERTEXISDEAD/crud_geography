<?php
$host = 'localhost';
$user = 'valery';
$pass = 'password';
$db_name = '2_lab';
$link = mysqli_connect($host, $user, $pass, $db_name);
if (!$link) {
echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
exit;
} ?>