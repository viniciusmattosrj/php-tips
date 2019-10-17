<?php

require __DIR__ . "/vendor/autoload.php";

/* Retorna uma array */
$db = include __DIR__ . "/source/Config.php";

return [
    "paths" => [
        "migrations" => [
            __DIR__ . "/database/migrations"
        ],
        "seeds" => [
            __DIR__ . "/database/seeds"
        ]
    ],
    "environments" => [
        "default_migration_table" => "migrations",
        "default_database" => "dev",
        "dev" => [
            "development" => [
                "adapter"   => $db['dev']['driver'],
                "host"      => $db['dev']['host'],
                "name"      => $db['dev']['dbname'],
                "user"      => $db['dev']['username'],
                "password"  => $db['dev']['passwd'],
                "charset"   => $db['dev']['charset'],
                "collation" => $db['dev']['collation']
             ],
            "production" => [
                "adapter"   => $db['prod']['driver'],
                "host"      => $db['prod']['host'],
                "name"      => $db['prod']['dbname'],
                "user"      => $db['prod']['username'],
                "password"  => $db['prod']['passwd'],
                "charset"   => $db['prod']['charset'],
                "collation" => $db['prod']['collation']
            ],
        ]
    ]
];