<?php
$page = $_GET['page'] ?? 'home';
$allowedPages = ['home', 'login', 'register', 'dashboard', 'music', 'pomodoro', 'room'];
if (!in_array($page, $allowedPages, true)) $page = 'home';
require __DIR__ . "/pages/{$page}.php";