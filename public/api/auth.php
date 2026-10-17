<?php
// public/api/auth.php

ini_set('display_errors', '0'); // Keep JSON responses clean
header('Content-Type: application/json');

require_once __DIR__ . '/../../src/Support/Env.php';
require_once __DIR__ . '/../../src/Config/Database.php';
require_once __DIR__ . '/../../src/Support/Security.php';
require_once __DIR__ . '/../../src/Services/AuthService.php';

use App\Support\Env;
use App\Support\Security;
use App\Services\AuthService;

Env::load(__DIR__ . '/../../.env');
Security::startSession();

$action = $_GET['action'] ?? '';
$input = json_decode(file_get_contents('php://input'), true) ?? $_POST;

// 1. Verify CSRF token
if (!Security::verifyCsrf($input['csrf_token'] ?? '')) {
    http_response_code(403);
    echo json_encode(['success' => false, 'error' => 'Invalid security token. Please refresh the page.']);
    exit;
}

$auth = new AuthService();

// 2. Handle Actions
if ($action === 'register') {
    $res = $auth->register(
        trim($input['username'] ?? ''), 
        trim($input['email'] ?? ''), 
        $input['password'] ?? ''
    );
    
    if ($res['success']) {
        echo json_encode(['success' => true, 'message' => 'Account created successfully!']);
    } else {
        http_response_code(400);
        echo json_encode(['success' => false, 'error' => $res['error']]);
    }
} 
elseif ($action === 'login') {
    $res = $auth->login(trim($input['email'] ?? ''), $input['password'] ?? '');
    
    if ($res['success']) {
        echo json_encode(['success' => true, 'message' => 'Logged in!']);
    } else {
        http_response_code(401);
        echo json_encode(['success' => false, 'error' => $res['error']]);
    }
} 
else {
    http_response_code(404);
    echo json_encode(['success' => false, 'error' => 'Endpoint not found.']);
}