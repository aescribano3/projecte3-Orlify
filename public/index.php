<?php

use \Emeset\Contracts\Routers\Router;

error_reporting(E_ERROR | E_WARNING | E_PARSE);
include "../vendor/autoload.php";


/* Creem els diferents models */
$contenidor = new \App\Container(__DIR__ . "/../App/config.php"); 

$app = new \Emeset\Emeset($contenidor);

$app->get("/", "App\Controllers\Portada:ctrlIndex");
$app->get("/login", "App\Controllers\Login:ctrlIndex");
$app->get("/mis-datos", "App\Controllers\UserData:ctrlIndex");
$app->get("/register", "App\Controllers\Singup:ctrlIndex");
$app->get("/carnet", "App\Controllers\Carnet:ctrlIndex"); // llamar al controlador de carnet
$app->get("/view-orla", "App\Controllers\ViewOrla:ctrlIndex"); // llamar al controlador de orla
$app->get("/info-dades", "App\Controllers\Controlpanel:ctrlIndex");
$app->get("/imgiorla", "App\Controllers\Imguser:ctrlIndex");
$app->get("/dadesorla", "App\Controllers\Imguser:ctrlOrla");
$app->post("/create-grup", "App\Controllers\Grup:createGrup");


$app->get(Router::DEFAULT_ROUTE, "App\Controllers\Error:ctrlIndex");

$app->execute();