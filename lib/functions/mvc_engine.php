<?php
if (Url::fullUrl() == "/") {
    header('Location: '.webRoot.landingPage);
    exit;
}
$filename = strtolower(Url::get(2));
$method   = Url::get(3);
$ctrl     = new Controller();
$dir      = $ctrl->getDir();
if (file_exists(basePath.$dir.'controllers/'.$filename.'.php')) {
    require_once basePath.$dir.'controllers/'.$filename.'.php';
    $method = empty($method) ? 'index' : $method;
    $class  = $ctrl->getController($filename);
    if(method_exists($class,$method) && $method != 'model'){
        call_user_func( array($class,$method));
    }else{
        header('Location: '.webRoot.errorPage);
    }
}else{
    header('Location: '.webRoot.errorPage);
}