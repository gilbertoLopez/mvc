<?php

class Controller{
    private   $basePath = basePath;
    private   $dir = 'app/';

    protected function view($view_file,$data = array()){
        $view = strtolower($this->getCall());
        $url  = $this->basePath.$this->dir.'views/'.$view.'/'.$view_file;
        if (file_exists($url)) {
            extract($data);
            require_once $url;
        }else{
            header('Location: '.webRoot.errorPage.'/type/view');
        }
    }

    public function getDir(){
        return $this->dir;
    }

    private function getCall(){
        return get_called_class();
    }

    protected function model(){
        $name       = $this->getCall();
        $file       = strtolower($name);
        $model_file = $this->basePath.$this->dir.'models/'.$file.'.model.php';
        if(file_exists($model_file)){
            include_once $model_file;
        }
        $class = $name.'_model';
        if (class_exists($class)){
            return new $class();
        }else{
            die('Model '.$class.' does not exists');
        }
    }

    protected function validEmptyData($data,$ignore=array()){
        $valid = true;
        foreach ($data as $key => $value) {
            $value = trim($value);
            if(!isset($value) && !in_array($key,$ignore)){
                $valid = false;
            }
        }
        return $valid;
    }

    public function getController($className){
        $classFile  = strtolower($className);
        $class      = ucfirst($className);
        $controllerPath = $this->basePath.$this->dir.'controllers/'.$classFile.'.php';
        if(is_file($controllerPath)){
            require_once $controllerPath;
        }
        if(class_exists($class)){
            return new $class($class);
        }else{
            die('The controller "'.$class.'" does not exists');
        }
    }

	protected function get_vars( $index ){
		return Url::get( 3 + $index );
	}

}