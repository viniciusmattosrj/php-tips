<?php

require __DIR__ . "/vendor/autoload.php";

use Source\Support\Email;

$email = new Email();

$email->add(
    "Teste",
    "<h1>Teste Envio</h1>",
    "Vinicius Mattos",
    "vinimattos.rj@gmail.com"
);

var_dump($email);