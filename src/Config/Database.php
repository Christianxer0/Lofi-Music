<?php
// src/Config/Database.php

namespace App\Config;

use PDO;
use PDOException;
use App\Support\Env;

class Database
{
    private static ?PDO $instance = null;

    public static function getConnection(): PDO
    {
        if (self::$instance === null) {
            $host = Env::get('DB_HOST', '127.0.0.1');
            $port = Env::get('DB_PORT', '3306');
            $db   = Env::get('DB_DATABASE', 'cozy_lofi');
            $user = Env::get('DB_USERNAME', 'root');
            $pass = Env::get('DB_PASSWORD', '');

            $dsn = "mysql:host={$host};port={$port};dbname={$db};charset=utf8mb4";
            
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false, // Real prepared statements
            ];

            try {
                self::$instance = new PDO($dsn, $user, $pass, $options);
            } catch (PDOException $e) {
                // Log the error server-side, show generic error to user
                error_log("Database connection failed: " . $e->getMessage());
                throw new \RuntimeException("Could not connect to the database. Please check your configuration.");
            }
        }

        return self::$instance;
    }
}