<?php
/**
 * Created by PhpStorm.
 * User: a.borisov
 * Date: 25.02.2016
 * Time: 12:37
 */
require_once 'core/routing.php';
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';
//Запуск роутинга
Routing::execute();

