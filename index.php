<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
session_start();
define('basePath',$_SERVER["DOCUMENT_ROOT"].'/');
define('webRoot', 'http://'.$_SERVER['SERVER_NAME'].'/');

$landingPage = 'bienvenido';
require_once basePath.'lib/functions/init.php';
Controller::saludo();