<?php

/*
|--------------------------------------------------------------------------
| Configuration - Constants and Variables
|--------------------------------------------------------------------------
*/
$ini = parse_ini_file(__DIR__ . '/../config.ini');

define('URL_PROTOCOL', '//');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
// define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN .'/');
define('DB_DRIVER', $ini['db_driver']); // Sample database name
define('DB_HOST', $ini['db_host']); // Sample database name
define('DB_NAME', $ini['db_name']); // Sample database name
define('DB_USER',  $ini['db_user']); // Sample database username
define('DB_PASS', $ini['db_pass']); // Sample database password
define('DB_PREFIX', $ini['db_prefix']); // Sample database prefix

define('PASS_PHRASE', 'https://open-nis.org/api/encryption'); // Passphrase or KEK API URL
define('AUTH_TOKEN', 'encv1.VWZUSXNEUVdQVmlPbnVVTVRDZkxibC9aM3YwT21raVhpdXRBNGZoR1dsUjllUT09.iJPEzvBUYueIhg0c8VD5Ag==.a1ycb+X3teBNAlAjQAQe/w=='); // Authorization Bearer token

/*
|--------------------------------------------------------------------------
| Load BasicPHP Class Library
|--------------------------------------------------------------------------
*/

// require_once(__DIR__ . '/../MysqliDb.php');
require_once __DIR__ . '/../Basic.php';
require_once __DIR__ . '/functions.php';

// Basic::laraDb();

/*
|--------------------------------------------------------------------------
| Middleware
|--------------------------------------------------------------------------
*/

Basic::capsulate();

Basic::setErrorReporting(); // Error reporting
// Basic::setErrorReporting(); // Error reporting
// Basic::setJsonBodyAsPOST(); // JSON as $_POST
// Basic::setFirewall(); // Enable firewall
// Basic::setHttps(); // Require TLS/HTTPS

// setcookie('token', Basic::encrypt('{"username":"user","role":"admin"}', PASS_PHRASE), NULL, NULL, NULL, NULL, TRUE); // Sample token
// var_dump(json_decode(Basic::decrypt($_COOKIE['token'], PASS_PHRASE), TRUE));

Basic::setAutoloadClass(['classes', 'models', 'views', 'controllers']); // Autoload folders
Basic::setAutoRoute(); // Automatic '/class/method' routing

/*
|--------------------------------------------------------------------------
| Endpoint Routes
|--------------------------------------------------------------------------
*/

Basic::route('GET', '/', function() { // Set homepage
    header('Location: ' . base_url() . 'home');
    // $home = new HomeController;
    // $home->index();
});

Basic::route('GET', '/haidar', function() { // Set homepage
    $data = ['name' => 'haidar'];
    Basic::apiResponse(200, $data, 'application/json');
});


/*
|--------------------------------------------------------------------------
| Handle Error 404 - Page Not Found - Invalid URI
|--------------------------------------------------------------------------
*/

Basic::apiResponse(404); // Not Found
