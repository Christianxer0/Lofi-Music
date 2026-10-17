<?php
// public/index.php

ini_set('display_errors', '1');
error_reporting(E_ALL);

spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $base_dir = __DIR__ . '/../src/';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) return;
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    if (file_exists($file)) require $file;
});

use App\Support\Env;
use App\Support\Security;
use App\Config\Database;

Env::load(__DIR__ . '/../.env');
Security::startSession(); // Start session globally for CSRF

// Test DB connection silently
try { Database::getConnection(); } catch (\Exception $e) { die("DB Error: " . $e->getMessage()); }

$page = $_GET['page'] ?? 'home';
$allowedPages = ['home', 'login', 'register', 'dashboard', 'music', 'pomodoro', 'room'];
if (!in_array($page, $allowedPages, true)) $page = 'home';
require __DIR__ . "/pages/{$page}.php";