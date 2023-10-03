<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

ob_start();

$route = new Router(url(), ":");

$route->namespace("Source\App");

$route->group(null);

$route->get("/", "Web:home");
$route->get("/sobre", "Web:about");
$route->get("/cadastro","Web:register");
$route->get("/login","Web:login");
$route->get("/carrinho","Web:shopCart");
$route->get("/favoritos","Web:favorite");
$route->get("/faq","Web:faq");

//rota teste
$route->get("/mo", "Web:apiFaqs");

$route->get("/catalogo","Web:art");
$route->get("/catalogo/{author}","Web:art");

$route->get("/ops/{errcode}", "Web:error");

$route->group("/app");
$route->get("/", "App:home");
$route->get("/perfil", "App:profile");
$route->group(null);


$route->group("/admin");
$route->get("/", "Adm:home");
$route->get("/curadores", "Adm:curators");
$route->group(null);

$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();
