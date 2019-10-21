<?php

require __DIR__. "/vendor/autoload.php";

use CoffeeCode\Paginator\Paginator;
use Source\Models\Post;

$post = new Post();
$page = filter_input(INPUT_GET,"page", FILTER_SANITIZE_STRIPPED);


$paginator = new Paginator("http://10.11.0.11:8008/ep05/?page=","Pagina",["Primeira Pagina", "Primeira"],["Ultima Pagina", "Ultima"]);

/* Controle de quantos registros serao exibidos por pagina. */
$paginator->pager($post->find()->count(), 3, $page,2);

$posts = $post->find()->limit($paginator->limit())->offset($paginator->offset())->fetch(true);

echo "<link rel='stylesheet' href='style.css' />";
echo "<p>Pagina {$paginator->page()} de {$paginator->pages()}</p>";

if ($posts) {
    foreach ($posts as $post) {
        echo "<article class='post'><img src='{$post->cover}' /><div><h1>{$post->title}</h1><div>{$post->description}</div></div></article>";
    }
}

/* Responsavel por renderizar final da pagina o navegador de paginas. */
echo $paginator->render();