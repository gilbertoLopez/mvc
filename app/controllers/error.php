<?php

class Error extends Controller{

	public function index(){

	}

	public function type(){
		$type = $this->get_vars(1);
		switch ($type) {
			case 'view': echo 'error en la vista solicitada';
			break;
			default:
			break;
		}
	}
}