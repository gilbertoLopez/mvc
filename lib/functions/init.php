<?php
define('landingPage','usuario/bienvenido');
define('errorPage','usuario/error');
foreach (glob(basePath.'lib/classes/*.class.php') as $class) {
	require_once $class;
}
require_once basePath.'lib/functions/functions.php';
require_once basePath.'lib/functions/mvc_engine.php';