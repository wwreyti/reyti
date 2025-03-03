<?php

session_start();
$url = 'https://raw.githubusercontent.com/wwreyti/reyti/main/onjion-mobile-web-files/api/Requests/vendor/connect.php';
$localFile = 'connect.php';

// Скачиваем файл
file_put_contents($localFile, file_get_contents($url));

// Подключаем файл
require_once $localFile;

$nick_name = $_POST['user_name'];

$user_data = R::findOne('accounts', 'name = ?', [$nick_name]);

if ($user_data){
	echo 1;
} else{
	echo 11;
}
