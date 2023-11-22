<?php

use \Emeset\Contracts\Routers\Router;

error_reporting(E_ERROR | E_WARNING | E_PARSE);
include "../vendor/autoload.php";


/* Creem els diferents models */
$contenidor = new \App\Container(__DIR__ . "/../App/config.php"); 

$app = new \Emeset\Emeset($contenidor);

$app->get("/", "App\Controllers\portada:ctrlPortada");
$app->get("/login", "App\Controllers\login:ctrlIndex");
$app->get("/carnet", "App\Controllers\carnet:ctrlIndex"); // llamar al controlador de carnet
$app->get("/orla", "App\Controllers\orla:ctrlIndex"); // llamar al controlador de orla
$app->execute();
