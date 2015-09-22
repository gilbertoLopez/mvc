<?php

function blockRender($tpl,$links=array()){
	require_once basePath.'mvc/block_views/'.$tpl.'.php';
}

function view($type){
  global $filename;
  global $method;
  $path = basePath.'app/views/'.$filename.'/'.$type;
  $fjs  = '<script src="/mvc/views/%1$s/js/%1$s%2$s.js"></script>'."\n";
  $fcss = '<link rel="stylesheet" href="/mvc/views/%1$s/css/%1$s%2$s.css"/>'."\n";
  if(file_exists($path)){
    if(file_exists($path.'/'.$filename.'.'.$type)){
      echo sprintf(${'f'.$type},$filename,'');
    }
    if(file_exists($path.'/'.$filename.'.'.$method.'.'.$type)){
      echo sprintf(${'f'.$type},$filename,'.'.$method);
    }
  }
}
