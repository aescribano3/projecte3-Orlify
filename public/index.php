<?php

use \Emeset\Contracts\Routers\Router;

error_reporting(E_ERROR | E_WARNING | E_PARSE);
include "../vendor/autoload.php";


/* Creem els diferents models */
$contenidor = new \App\Container(__DIR__ . "/../App/config.php"); 

$app = new \Emeset\Emeset($contenidor);

$app->get("/", "App\Controllers\Portada:ctrlIndex");
$app->get("/login", "App\Controllers\login:ctrlIndex");
$app->get("/logout", "App\Controllers\login:ctrlDoLogout");
$app->post("/dologin", "App\Controllers\login:ctrlDoLogin");
$app->get("/mis-datos", "App\Controllers\userdata:ctrlIndex");
$app->get("/register", "App\Controllers\singup:ctrlIndex");
$app->get("/carnet", "App\Controllers\Carnet:ctrlIndex"); // llamar al controlador de carnet
$app->get("/view-orla", "App\Controllers\ViewOrla:ctrlIndex"); // llamar al controlador de orla
$app->get("/info-dades", "App\Controllers\Controlpanel:ctrlIndex");
$app->get("/imgiorla", "App\Controllers\imguser:ctrlIndex");
$app->get("/dadesorla", "App\Controllers\imguser:ctrlOrla");


$app->get(Router::DEFAULT_ROUTE, "App\Controllers\Error:ctrlIndex");

$app->execute();