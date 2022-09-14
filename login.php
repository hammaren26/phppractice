<?php


$login = trim($_GET['login']);
$password = trim($_GET['pass']);

if (empty($login) || empty($password)) {
   echo "Ошибка. Заполните все поля!";
   return;
}


if ($login != 'login' || $password != "123") {
   echo "Такой пользователь не найден";
} else {
   echo "Добро пожаловать";
}
