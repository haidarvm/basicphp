<?php

/*
|--------------------------------------------------------------------------
| Configuration - Constants and Variables
|--------------------------------------------------------------------------
*/

define('DB_NAME', 'mini'); // Sample database name
define('DB_USER', 'root'); // Sample database username
define('DB_PASS', 'Bismillah'); // Sample database password
define('DB_PREFIX', 'wput_'); // Sample database prefix

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
    $page_title = 'Starter Application';
    Basic::view('home', compact('page_title'));
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
