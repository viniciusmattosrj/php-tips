<?php

require __DIR__ . "/vendor/autoload.php";

use Source\Support\Email;

$email = new Email();

$email->add(
    "Teste",
    "<h1>Teste Envio</h1>",
    "Vinicius Mattos",
    "vinimattos.rj@gmail.com"
)->send();


/* EXEMPLO DISPARO COM 1 ANEXO */
//$email->add(
//    "Teste",
//    "<h1>Teste Envio</h1>",
//    "Vinicius Mattos",
//    "vinimattos.rj@gmail.com"
//)->attach(
//    "files/image_01.jpg",
//    "PHPTipsI"
//)->send();


/* EXEMPLO DISPARO COM 2 ANEXO */
$email->add(
    "Teste",
    "<h1>Teste Envio</h1>",
    "Vinicius Mattos",
    "vinimattos.rj@gmail.com"
)->attach(
    "files/image_01.jpg",
    "PHPTips"
)->attach(
    "files/image_02.jpg",
    "PHPTips"
)->send();


if ($email->error()) {
    echo $email->error()->getMessage();
    die('kkk');
}

var_dump(true);