<?php

use \Emeset\Contracts\Routers\Router;

error_reporting(E_ERROR | E_WARNING | E_PARSE);
include "../vendor/autoload.php";

$contenidor = new \App\Container(__DIR__ . "/../App/config.php"); 

$app = new \Emeset\Emeset($contenidor);
$app->middleware([\App\Middleware\App::class, "execute"]);

$app->get("/", "App\Controllers\Portada:ctrlIndex");
$app->get("/login", "App\Controllers\Login:ctrlIndex");
$app->get("/logout", "App\Controllers\login:ctrlDoLogout");
$app->post("/dologin", "App\Controllers\login:ctrlDoLogin");
$app->get("/mis-datos", "App\Controllers\User:ctrlmisdades");
$app->get("/register", "App\Controllers\Singup:ctrlIndex");
$app->get("/carnet", "App\Controllers\Carnet:ctrlIndex");
$app->get("/view-orla", "App\Controllers\ViewOrla:ctrlIndex");
$app->get("/info-dades", "App\Controllers\Controlpanel:ctrlIndex");
$app->get("/imgiorla", "App\Controllers\Imguser:ctrlIndex");
$app->get("/dadesorla", "App\Controllers\Imguser:ctrlOrla");
$app->post("/doregister", "App\Controllers\singup:Register");
$app->post("/create-grup", "App\Controllers\Grup:createGrup");
$app->post("/modifi-grup", "App\Controllers\Grup:modifiGrup");
$app->post("/drop-grup", "App\Controllers\Grup:dropGrup");
$app->post("/createorla", "App\Controllers\CreateOrla:ctrlCreateOrla");
$app->post("/updatedatauser", "App\Controllers\User:Updateuser");
$app->post("/checkpass", "App\Controllers\User:checkpass");
$app->post("/check-username", "App\Controllers\User:checkuser");





$app->get(Router::DEFAULT_ROUTE, "App\Controllers\Error:ctrlIndex");

$app->execute();