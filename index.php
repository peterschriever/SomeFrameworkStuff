<?php
/**
*	SomeFrameworkStuff
*/
error_reporting(E_ALL);
ini_set("display_errors", 1);

# set the include_path accordingly {Library is outside of the project folder}
$path = '/var/www/lib/SFS';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);

# initiation file, handles starting of the application
use \Library\Core\Initiate\coreInit AS Initiate;
use \Library\Core\Router\coreRouter AS Router;

# initiate autoloader
spl_autoload_register('defaultAutoloader');

/**
*	function: defaultAutoloader 
*	This autoloader works with namespaces, the requested namespace
*	must be the same as the directory path of the class
*	e.g: $newClassInstance = Application/Controllers/Home();
*	evaluates into the path: Application/Controllers/Home.php
*	Note the case-sensitivity
*/
function defaultAutoloader($class) {
	$class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
	//echo '<br/>$class: '.$class.'<br/>';
	include($class.'.php');
}

# initiate application
# to use a custom config:
# $init = new Initiate('\Application\Configs\customConfig');
$init = new Initiate('\Application\Configs\defaultConfig');

# load application router
$router = new Router();
# find best application route based on URL
$router->findBestRoute();

// execute application
// interactivity stuff ??



