<?php

namespace Library\Core\Initiate;

use Library\Core\Functions\coreFunctions as coreFunctions;

/**
* Initiate
*/
class coreInit
{
	public function __construct($config) {
		error_reporting(E_ALL);
		ini_set("display_errors", 1);
				
		# load config
		$config::load();

	}

}