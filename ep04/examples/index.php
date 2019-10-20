<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

$router->group(null);
$router->get("/", function ($data) {
    echo "<h1>Ola Mundo!</h1>";
    var_dump($data);
});

$router->get("/", function ($data) {
    echo "<h1>Ola Mundo!</h1>";
    var_dump($data);
});

$router->get("/contato", function ($data) {
    echo "<h1>Ola Mundo!</h1>";
    var_dump($data);
});

$router->group("ops");
$router->get("/{errcode}", function ($data) {
    echo "<h1>Erro {$data["errcode"]}</h1>",
    var_dump($data);
});

$router->dispatch();

if ($router->error()) {
    $router->redirect("/ops/{$router->error()}");
}