<?php

define('DB_HOST', 'Strizhenok'); //Адрес
define('DB_USER', 'mysql'); //Имя пользователя
define('DB_PASSWORD', 'mysql'); //Пароль
define('DB_NAME', 'bogdan_web5'); //Имя БД

$mysql = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
?>
