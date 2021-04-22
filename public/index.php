<?php
ini_set("display_errors", 1);
ini_set("error_reporting", E_ALL);
ini_set("display_startup_errors", 1);

define('DS', DIRECTORY_SEPARATOR);
define('ROOT_DIR', dirname(__DIR__, 1));
define('PUBLIC_PATH', __DIR__);
define('APP_PATH', ROOT_DIR . DS . 'src');
define('PAGES_PATH', APP_PATH . '/pages');
define('PAGE_PARTIALS_PATH', APP_PATH . DS. 'partials');
define('ERRO_PAGES_PATH', PAGE_PARTIALS_PATH . DS . 'errors');

require_once APP_PATH . '/app.php';