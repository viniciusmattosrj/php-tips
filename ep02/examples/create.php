<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;
use Source\Models\Address;

$user = new User();
$user->first_name = "Everton";
$user->last_name = "Ribeiro";
$user->genre = "M";
$user->save();
//
//$addr = new Address();
//$addr->add($user, "Nome da rua", "1A");
//$addr->save();

var_dump($user);