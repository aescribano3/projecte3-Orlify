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
$app->get("/imatges-usuari", "App\Controllers\imguser:ctrlimatgeuser");
$app->get("/dadesorla", "App\Controllers\imguser:ctrlOrla");
$app->get("/ver-aquesta-orla", "App\Controllers\imguser:ctrlorlaimg");
$app->get("/selecionarimatge", "App\Controllers\imguser:selectimg");
$app->get("/esborrar-img", "App\Controllers\imguser:deleteimg");

$app->post("/getuser", "App\Controllers\Controlpanel:ctrlgetuser");
$app->post("/getgrup", "App\Controllers\Controlpanel:ctrlgetgrup");
$app->post("/doregister", "App\Controllers\singup:Register");
$app->post("/create-grup", "App\Controllers\Controlpanel:createGrup");
$app->post("/modifi-grup", "App\Controllers\Controlpanel:modifiGrup");
$app->post("/drop-grup", "App\Controllers\Controlpanel:dropGrup");
$app->post("/create-user", "App\Controllers\Controlpanel:createUser");
$app->post("/modifi-user", "App\Controllers\Controlpanel:modifiUser");
$app->post("/drop-user", "App\Controllers\Controlpanel:dropUser");
$app->post("/createorla", "App\Controllers\Controlpanel:ctrlCreateOrla");
$app->post("/modifiorla", "App\Controllers\Controlpanel:ctrlmodifiOrla");
$app->post("/droporla", "App\Controllers\Controlpanel:ctrldropOrla");
$app->post("/updatedatauser", "App\Controllers\User:Updateuser");
$app->post("/checkpass", "App\Controllers\User:checkpass");
$app->post("/afegir-usuari-foto", "App\Controllers\imguser:afegirimatge");
$app->post("/check-username", "App\Controllers\User:checkuser");
$app->post("/checkkey", "App\Controllers\ViewOrla:CheckKey");


$app->get(Router::DEFAULT_ROUTE, "App\Controllers\Error:ctrlIndex");

// forget password 
$app->get("/forgot-password", "App\Controllers\ForgotPassword:ctrlIndex");
$app->post("/doforgotpassword", "App\Controllers\ForgotPassword:ctrlDoForgotPassword");
$app->get("/reset-password", "App\Controllers\ResetPassword:ctrlIndex");
$app->post("/restablecercontra", "App\Controllers\ResetPassword:ctrlDoResetPassword");

$app->execute();