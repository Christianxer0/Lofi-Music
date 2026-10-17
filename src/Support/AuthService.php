<?php
// src/Services/AuthService.php

namespace App\Services;

use App\Config\Database;

class AuthService
{
    public function register(string $username, string $email, string $password): array
    {
        $pdo = Database::getConnection();
        
        // 1. Check for duplicates
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ? OR username = ?");
        $stmt->execute([$email, $username]);
        if ($stmt->fetch()) {
            return ['success' => false, 'error' => 'Email or username already exists.'];
        }

        // 2. Hash password
        $hash = password_hash($password, PASSWORD_BCRYPT);

        // 3. Insert user
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password_hash, display_name) VALUES (?, ?, ?, ?)");
        $stmt->execute([$username, $email, $hash, $username]);

        return ['success' => true];
    }

    public function login(string $email, string $password): array
    {
        $pdo = Database::getConnection();
        
        $stmt = $pdo->prepare("SELECT id, username, password_hash FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password_hash'])) {
            // Regenerate session ID to prevent session fixation attacks
            session_regenerate_id(true);
            
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            
            return ['success' => true];
        }

        return ['success' => false, 'error' => 'Invalid email or password.'];
    }
}