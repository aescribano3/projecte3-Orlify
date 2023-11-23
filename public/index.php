<?php

use \Emeset\Contracts\Routers\Router;

error_reporting(E_ERROR | E_WARNING | E_PARSE);
include "../vendor/autoload.php";


/* Creem els diferents models */
$contenidor = new \App\Container(__DIR__ . "/../App/config.php"); 

$app = new \Emeset\Emeset($contenidor);

<<<<<<< HEAD
$app->get("/", "App\Controllers\login:ctrlIndex");
$app->get("/mis-datos", "App\Controllers\userdata:ctrlIndex");
$app->get("/register", "App\Controllers\singup:ctrlIndex");
$app->get("/carnet", "App\Controllers\Carnet:ctrlIndex"); // llamar al controlador de carnet
$app->get("/view-orla", "App\Controllers\ViewOrla:ctrlIndex"); // llamar al controlador de orla
=======
$app->get("/", "App\Controllers\portada:ctrlPortada");
$app->get("/login", "App\Controllers\login:ctrlIndex");
$app->get("/carnet", "App\Controllers\user:ctrlCarnet"); // llamar al controlador de carnet
$app->get("/mis-datos", "App\Controllers\user:ctrlDades");
$app->get("/imgiorla", "App\Controllers\imguser:ctrlIndex");



>>>>>>> feature-alumne-img-perfil
$app->get(Router::DEFAULT_ROUTE, "App\Controllers\Error:ctrlIndex");
$app->get("/info-grup", "App\Controllers\Professors:ctrlIndex");

$app->execute();