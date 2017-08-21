<?php
/**
 * Created by PhpStorm.
 * User: basili4
 * Date: 19.08.17
 * Time: 13:12
 */

require __DIR__ . "/configs/app.php";
require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/configs/events.php";
require  __DIR__ . "/configs/template.php";

$route = new \inc\Route();


if (defined('DEBUG') && DEBUG) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}
