<?php
//1 Общие настройки
header('Content-type: text/html; charset=UTF-8');
//2 Подключение файлов системы
define('ROOT', dirname(__FILE__));
include_once (ROOT . '/components/Autoloads.php');
//4 Вызов Router
$router = new Router();
$router ->run();
//5 строка запроса для регистрации 
//http://antontester.ru/api/?register={"name":"Anton","surName":"Krivchik","patronymic":"Stanislavovich","phone":"9650347115","email":"anton4ik08@mail.ru","password":"123456"}
//http://kron/api/?register={%22name%22:%22Simas%22,%22surName%22:%22gggggg%22,%22patronymic%22:%22aaaaaa%22,%22phone%22:%229650347115%22,%22email%22:%22Simas4ik08@mail.ru%22,%22password%22:%22123456%22}