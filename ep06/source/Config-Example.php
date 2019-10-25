<?php

define("DATA-LAYER_CONFIG", [
    "driver"   => "mysql",
    "host"     => "10.11.0.3",
    "port"     => "3306",
    "dbname"   => "null",
    "username" => "null",
    "passwd"   => "null",
    "options"  => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);