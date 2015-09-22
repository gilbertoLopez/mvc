<?php
class Url{

	static public function fullUrl() {
        $fullUrl = $_SERVER['REQUEST_URI'];
        return $fullUrl;
	}

    static public function get($index = 1) {
        $paramsFilter = Url::fullUrl();
        $paramsFilter = (explode('?', $paramsFilter));
        return Url::static_arg($paramsFilter[0], $index);
    }

	static protected function static_arg($static_arguments, $index) {
        if (!empty($static_arguments)) {
            $arguments = explode('/', $static_arguments);
        } else {
            $arguments = 0;
        }

        if (isset($arguments[$index])) {
            return $arguments[$index];
        }
    }


}