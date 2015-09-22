<?php

class Bienvenido extends Controller{

	public function index(){
		echo '<b>bienvenido index</b><br/>';
		$this->view('test.php');
	}
}