<?php

require '../vendor/autoload.php';

require_once '../route/routes.php';

use Pecee\SimpleRouter\SimpleRouter;
use App\Helpers\Session;

define('ENVIRONMENT', 'development');

if (defined('ENVIRONMENT')){

	switch (ENVIRONMENT){
		case 'development':
			error_reporting(E_ALL);
		break;

		case 'production':
			error_reporting(0);
		break;

		default:
			exit('The application environment is not set correctly.');
	}

}

defined('DS') || define('DS', DIRECTORY_SEPARATOR);
define('APPDIR', realpath(__DIR__.'/../app/') .DS);
define('COREDIR', realpath(__DIR__.'/../core/') .DS);
define('PUBLICDIR', realpath(__DIR__) .DS);
define('ROOTDIR', realpath(__DIR__.'/../') .DS);

Session::init();
SimpleRouter::start();







