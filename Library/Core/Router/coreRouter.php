<?php

namespace Library\Core\Router;

use Library\Core\Functions\coreFunctions as f;

/**
* Config core class
*/
class coreRouter
{
	public $url = DEFAULT_ROUTE;

	
	public function __construct() {
		if(isSet($_GET['url'])) {
			$str = $_GET['url'];
		} else {
			# no url, use DEFAULT_ROUTE
			echo 'no url, use DEFAULT_ROUTE';
			return true;
		}
		$str = trim($str, '/');
		$arrUrl = explode('/', $str);
		f::dump($arrUrl);
		$this->url = $arrUrl;
	}

	public function findBestRoute() {
		
	}


	
}