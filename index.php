<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
session_start();


//	init vars
$basePath = $_SERVER["DOCUMENT_ROOT"].'/';
$webRoot = 'http://'.$_SERVER['SERVER_NAME'].'/';
$landingPage = 'bienvenido';
require_once $basePath.'includes/config.php';
require_once $basePath.'includes/bootstrap.php';
require_once './includes/bottom.php';
// <!DOCTYPE html>
// <html lang="en">
// <head>
// 	<meta charset="UTF-8">
// 	<title>ejemplo</title>
// </head>
// <body>
// 	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis deleniti voluptatum facilis 
// 	error reiciendis temporibus alias repudiandae, porro natus iusto, recusandae consectetur, 
// 	est dolore perferendis excepturi repellendus unde quas corporis!
// </body>
// </html>