<?php
/**
 * Created by PhpStorm.
 * User: lexx
 * Date: 13.02.2016
 * Time: 17:15
 */

// ��� ����������� � ��
define ('DS', DIRECTORY_SEPARATOR); // ����������� ��� ����� � ������
$sitePath = realpath(dirname(__FILE__) . DS);
define ('SITE_PATH', $sitePath); // ���� � �������� ����� �����

define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'tablework');