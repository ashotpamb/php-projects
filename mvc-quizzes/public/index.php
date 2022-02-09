<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);
session_start();
define("ROOT",dirname(__DIR__));

require_once ROOT.'/app/Router.php';
//print_r(PDO::getAvailableDrivers());
$index = new Router();
$index->run();


