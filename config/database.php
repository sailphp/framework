<?php

return [
    'default' => [
        'driver'    => env('DB_DRIVER', 'mysql'),
        'host'      => env('DB_HOST', '192.168.0.1'),
        'database'  => env('DB_DATABASE', 'sail'),
        'username'  => env('DB_USERNAME', 'sail'),
        'password'  => env('DB_PASSWORD', 'password'),
        'charset'   => env('DB_CHARSET', 'utf8'),
        'collation' => env('DB_COLLATION', 'utf8_unicode_ci'),
        'prefix'    => env('DB_PREFIX', ''),
    ],
    'migrations_path' => env('MIGRATIONS_PATH', '/migrations'),
    'migrations_template' => '/storage/migration_template.txt',
    'migrations_table' => 'migrations',
];