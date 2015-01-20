<?php

namespace Library\Core\Functions;

/**
* Functions core class
*/
class coreFunctions
{
	
	public function __construct() {
	}

	public static function dump($var) {
		echo '<pre>';
		switch ($var) {
			case(empty($var)):
				echo false;
				return false;
				break;
			case(is_array($var)):
				var_dump($var);
				return true;
				break;
			default:
				var_dump($var);
				return true;
				break;
		}
		echo '</pre>';
	}

}