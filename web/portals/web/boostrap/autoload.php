<?php
/**
 * Created by PhpStorm.
 * User: TLA
 * Date: 8/4/17
 * Time: 14:04
 */

ini_set('display_errors', true);
error_reporting(E_ALL);

define('DS', DIRECTORY_SEPARATOR);

define('PATH_CORE', dirname(dirname(__FILE__)).DS);
define('ROOT_CORE', 'http://'.$_SERVER['HTTP_HOST'].DS.'portals/web/public/');

define('PATH_BOOSTRAP', PATH_CORE.'boostrap'.DS);
define('ROOT_BOOSTRAP', PATH_CORE.'boostrap'.DS);

define('PATH_PUBLIC', PATH_CORE.'public'.DS);
define('ROOT_PUBLIC', ROOT_CORE);
define('PATH_PUBLIC_FONT', PATH_PUBLIC.'font'.DS);
define('ROOT_PUBLIC_FONT', ROOT_PUBLIC.'font'.DS);
define('PATH_PUBLIC_IMAGE', PATH_PUBLIC.'image'.DS);
define('ROOT_PUBLIC_IMAGE', ROOT_PUBLIC.'image'.DS);
define('PATH_PUBLIC_JAVASCRIPT', PATH_PUBLIC.'javascript'.DS);
define('ROOT_PUBLIC_JAVASCRIPT', ROOT_PUBLIC.'javascript'.DS);
define('PATH_PUBLIC_PAGE', PATH_PUBLIC.'page'.DS);
define('ROOT_PUBLIC_PAGE', ROOT_PUBLIC.'page'.DS);
define('PATH_PUBLIC_STYLE', PATH_PUBLIC.'style'.DS);
define('ROOT_PUBLIC_STYLE', ROOT_PUBLIC.'style'.DS);

$page = '';

if (empty($_GET['page'])) {
    $_GET['page'] = 'home';
}

if (file_exists(PATH_PUBLIC_PAGE.$_GET['page'].'.php')) {
    $page = $_GET['page'];
}

if (empty($page)) {
    header('HTTP/1.0 404 Not Found');

    exit();
}

define('PAGE', $page);
define('PATH_PAGE', PATH_PUBLIC_PAGE.PAGE.'.php');
define('ROOT_PAGE', ROOT_PUBLIC_PAGE.PAGE.'.php');