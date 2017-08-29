<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 29.08.2017
 * Time: 11:46
 */

//FRONT CONTROLLER

//1)Общие настройки
 ini_set('display_errors', 1);
error_reporting(E_ALL);//на продакшн выключить
//2)Подключение файлов системы
//Create components/Router
define('ROOT', dirname(__FILE__));
require_once(ROOT. '/components/Router.php');
require_once(ROOT.'/components/Db.php');
//2)Установка соединения с БД
//3)Вызов Router
  $router = new Router();
  $router->run();