<?php
define('ROOT_DIR',   '/var/www/html/');
session_start();

require_once '../config/routes.php';

// Get the URL parameter from the .htaccess redirection
$url = $_GET['url'] ?? '';

// Dispatch the router
$router->dispatch($url);
