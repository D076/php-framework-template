<?php

use D076\PhpFramework\App;

define('APP_PATH', dirname(__DIR__));
define('FRAMEWORK_START', microtime(true));

require_once APP_PATH.'/vendor/autoload.php';

(new App())->run();
