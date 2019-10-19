<?php

require __DIR__ . "/../vendor/autoload.php";

//use CoffeeCode\DataLayer\Connect;
//
//$conn = Connect::getInstance();
//$error = Connect::getError();
//
//if ($error) {
//    echo $error->getMessage();
//    die('Oi');
//}
//
//$query = $conn->query("SELECT * FROM users");
//var_dump($query->fetchAll());

use Source\Models\User;

$user = new User();
$list = $user->find()->fetch(true);

/** @var $userItem User */
foreach ($list as $userItem) {
    var_dump($userItem->first_name);
    foreach ($userItem->addresses() as $address) {
        var_dump($address->data());
    }
}
