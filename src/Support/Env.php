<?php
// src/Support/Env.php

namespace App\Support;

class Env
{
    public static function load(string $path): void
    {
        if (!file_exists($path)) {
            throw new \RuntimeException("Environment file not found at: {$path}");
        }

        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            // Skip comments
            if (str_starts_with(trim($line), '#')) {
                continue;
            }

            // Split into key=value
            if (str_contains($line, '=')) {
                list($name, $value) = explode('=', $line, 2);
                $name = trim($name);
                $value = trim($value);

                // Remove quotes if present
                $value = trim($value, '"\'');

                // Set the environment variable
                if (!array_key_exists($name, $_ENV)) {
                    $_ENV[$name] = $value;
                    putenv("{$name}={$value}");
                }
            }
        }
    }

    public static function get(string $key, mixed $default = null): mixed
    {
        return $_ENV[$key] ?? getenv($key) ?: $default;
    }
}