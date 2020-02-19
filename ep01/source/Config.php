<?php

//return [
//    'dev' => [
//        'driver'       => 'mysql',
//        'host'         => '10.11.0.3',
//        'name'     => 'datalayer',
//        'username'     => 'root',
//        'passwd'       => 'A123456',
//        'port'         => '3306',
//        'charset'      => 'utf8',
//        'collation'    => 'utf8_unicode_ci',
//        'table_prefix' => '',
//        'table_suffix' => ''
//    ],
//    'prod' => [
//        'driver'       => 'mysql',
//        'host'         => '10.11.0.3',
//        'name'     => 'datalayer',
//        'username'     => 'root',
//        'passwd'       => 'A123456',
//        'port'         => '3306',
//        'charset'      => 'utf8',
//        'collation'    => 'utf8_unicode_ci',
//        'table_prefix' => '',
//        'table_suffix' => ''
//    ]
//];
define("DATA_LAYER_CONFIG", [
    "driver"   => "mysql",
    "host"     => "10.11.0.3",
    "port"     => "3306",
    "dbname"   => "datalayer",
    "username" => "root",
    "passwd"   => "A123456",
    "options"  => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);


//define("DATA_LAYER_CONFIG", [
//    "driver"   => "postgres",
//    "host"     => "10.11.0.2",
//    "port"     => "5432",
//    "dbname"   => "datalayer",
//    "username" => "webadm",
//    "passwd"   => "A123456",
//    "options"  => [
//        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
//        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
//        PDO::ATTR_CASE => PDO::CASE_NATURAL
//    ]
//]);
//$query = $conn->query("SELECT * FROM users");
//var_dump($query->fetchAll());