<?php
$url = 'https://raw.githubusercontent.com/wwreyti/reyti/main/onjion-mobile-web-files/api/Requests/vendor/rb.php';
$localFile = 'rb.php';

// Скачиваем файл
file_put_contents($localFile, file_get_contents($url));

// Подключаем файл
require_once $localFile;
    // localhost менять на хост
    // server1 менять на название бд(mysql)
    // root менять на пользователя
    // последнее менять на пароль
    R::setup( 'mysql:host=149.202.88.119;dbname=gs291068','gs291068', 'YIoJA2PrwPDu' );
