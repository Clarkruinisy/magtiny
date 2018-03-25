<?php

/*
|--------------------------------------------------------------------------
| Magtiny Framework
|--------------------------------------------------------------------------
|
| @package	Magtiny
| @author 	Clark Yanwei Zhao <zhaoyanwei@shinetechchina.com>
|
*/

define("MAGTINY_START_TIME", microtime(true));


/*
|--------------------------------------------------------------------------
| Register Composer Autoloader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We'll simply require it into the script here so that we
| don't have to worry about manual loading any of our classes later on.
|
*/

require __DIR__ . "/../vendor/autoload.php";


/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| We need to launch PHP development, so let us turn on kernal engine.
| Then start project server.
|
*/

// magtiny\framework\Magtiny::startKernal();
// magtiny\framework\Magtiny::startServer();

(new app\controller\Index)->index();