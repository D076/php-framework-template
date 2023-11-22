<?php

return [
    'enabled' => fn() => env('DB_ENABLED', 'true'),
    'driver' => fn() => env('DB_DRIVER', 'mysql'),
    'host' => fn() => env('DB_HOST', 'localhost'),
    'port' => fn() => env('DB_PORT', 3306),
    'database' => fn() => env('DB_DATABASE', 'test'),
    'username' => fn() => env('DB_USERNAME', 'root'),
    'password' => fn() => env('DB_PASSWORD', ''),
    'charset' => 'utf8',
];
