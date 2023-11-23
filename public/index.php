<?php

use \Emeset\Contracts\Routers\Router;

error_reporting(E_ERROR | E_WARNING | E_PARSE);
include "../vendor/autoload.php";


/* Creem els diferents models */
$contenidor = new \App\Container(__DIR__ . "/../App/config.php"); 

$app = new \Emeset\Emeset($contenidor);

$app->get("/", "App\Controllers\login:ctrlIndex");
$app->get("carnet", "App\Controllers\carnet:ctrlCarnet"); // llamar al controlador de carnet
$app->get("/mis-datos", "App\Controllers\userdata:ctrlIndex");
$app->get("/register", "App\Controllers\singup:ctrlIndex");
$app->get("/create-orla", "App\Controllers\orles:ctrlCreateIndex");


$app->get(Router::DEFAULT_ROUTE, "App\Controllers\Error:ctrlIndex");



$app->execute();
