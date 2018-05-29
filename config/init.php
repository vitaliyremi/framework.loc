<?php
define("DEBUG", 0); //проверка на ошибки 1-показывает ошибки 0-не показывает ошибки
define("ROOT", dirname( __DIR__ )); // Указывает на корень сайта (основная директория)
define("WWW", ROOT . '/public'); // Укакзывает на public папку
define("APP", ROOT . '/app'); // Указывает на app папку
define("CORE", ROOT . '/vendor/site/core'); // Ядро приложения
define("LIBS", ROOT . '/vendor/site/core/libs'); //Библиотеки
define("CACHE", ROOT . '/tmp/cache'); // Кэш
define("CONF", ROOT . '/config'); // Конфигурационный файл
define("LAYOUT", 'default'); // Шаблон сайта

$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
$app_path = preg_replace("#[^/]+$#", '', $app_path);
$app_path = str_replace('/public/', '', $app_path);
define("PATH", $app_path);
define("ADMIN", PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';
