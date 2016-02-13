<?php
/**
 * Created by PhpStorm.
 * User: lexx
 * Date: 13.02.2016
 * Time: 17:15
 */

// для подключения к бд
define ('DS', DIRECTORY_SEPARATOR); // разделитель для путей к файлам
$sitePath = realpath(dirname(__FILE__) . DS);
define ('SITE_PATH', $sitePath); // путь к корневой папке сайта

define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'tablework');