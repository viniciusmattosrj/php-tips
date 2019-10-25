<?php

ob_start();

require __DIR__ ."/vendor/autoload.php";

use League\OAuth2\Client\Provider\Facebook;

if (empty($_SESSION["userLogin"])) {
    echo "<h1>Guest</h1>";

    /*
     * AUTH FACEBOOK
     */
    $facebook = new Facebook([
        'clientId'        => FACEBOOK['app_id'],
        'clientSecret'    => FACEBOOK['app_secret'],
        'redirectUri'     => FACEBOOK['app_redirect'],
        'graphApiVersion' => FACEBOOK['app_version']
    ]);

    /* Utilizo para limpar a string caso venha algo na url que não é interesante */

    $authUrl = $facebook->getAuthorizationUrl([
        /* Indico que dados eu preciso */
        "scope" => ["email"]
    ]);

    $error = filter_input(INPUT_GET, "error", FILTER_SANITIZE_STRIPPED);
    if ($error) {
        "<h4>Você precisa autorizar para continuar.</h4>";
    }

    $code = filter_input(INPUT_GET, "code", FILTER_SANITIZE_STRIPPED);
    if ($code) {
        $token = $facebook->getAccessToken("authorization_code", [
            "code" => $code
        ]);

        $_SESSION["userLogin"] = $facebook->getResourceOwner($token);
        header("Refresh: 0");

    }

    echo "<a title='FB Login' href='{$authUrl}'>Faceboook Login</a>";
}

/** @var $user \League\OAuth2\Client\Provider\FacebookUser */
$user  = $_SESSION["userLogin"];
echo "<img width='120' alt='' src='{$user->getPictureUrl()}' /><h1>Bem Vindo(a)</h1>";

var_dump($user);

echo "<a title='Sair' href='?off=true'>Sair</a>";
$off = filter_input(INPUT_GET, "off", FILTER_VALIDATE_BOOLEAN);
if ($off) {
    unset($_SESSION["userLogin"]);
}

ob_end_flush();