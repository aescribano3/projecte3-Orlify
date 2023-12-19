<?php

use \Emeset\Contracts\Routers\Router;

error_reporting(E_ERROR | E_WARNING | E_PARSE);
include "../vendor/autoload.php";
include "../App/Middleware/App.php";
include "../App/Middleware/auth.php";
include "../App/Middleware/notalumne.php";

$contenidor = new \App\Container(__DIR__ . "/../App/config.php"); 

$app = new \Emeset\Emeset($contenidor);
$app->middleware([\App\Middleware\App::class, "execute"]);

$app->get("/", "App\Controllers\Portada:ctrlIndex");
$app->get("/login", "App\Controllers\login:ctrlindex");
$app->get("/logout", "App\Controllers\login:ctrlDoLogout");
$app->post("/dologin", "App\Controllers\login:ctrlDoLogin");
$app->get("/mis-datos", "App\Controllers\user:ctrlmisdades",[[\App\Middleware\Auth::class,"auth"]]);
$app->get("/register", "App\Controllers\singup:ctrlIndex");
$app->post("/doregister", "App\Controllers\singup:Register");

$app->get("/carnet", "App\Controllers\Carnet:ctrlIndex",[[\App\Middleware\Auth::class,"auth"]]);
$app->get("/view-orla", "App\Controllers\ViewOrla:ctrlIndex",[[\App\Middleware\Auth::class,"auth"]]);
$app->post("/checkkey", "App\Controllers\ViewOrla:CheckKey");
$app->get("/imatges-usuari", "App\Controllers\Imguser:ctrlimatgeuser");
$app->get("/dadesorla", "App\Controllers\Imguser:ctrlOrla");
$app->get("/ver-aquesta-orla", "App\Controllers\Imguser:ctrlorlaimg");
$app->get("/selecionarimatge", "App\Controllers\Imguser:selectimg",[[\App\Middleware\Auth::class,"auth"]]);
$app->get("/esborrar-img", "App\Controllers\Imguser:deleteimg");
$app->get("/denegarinformar", "App\Controllers\Imguser:denegarinformar",[[\App\Middleware\Auth::class,"auth"]]);
$app->get("/informarimatge", "App\Controllers\Imguser:informimg",[[\App\Middleware\Auth::class,"auth"]]);
$app->post("/afegir-usuari-foto", "App\Controllers\Imguser:afegirimatge",[[\App\Middleware\notalumne::class,"notalumne"]]);

$app->get("/info-dades", "App\Controllers\Controlpanel:ctrlIndex",[[\App\Middleware\notalumne::class,"notalumne"]]);
$app->post("/getuser", "App\Controllers\Controlpanel:ctrlgetuser",[[\App\Middleware\notalumne::class,"notalumne"]]);
$app->post("/getgrup", "App\Controllers\Controlpanel:ctrlgetgrup",[[\App\Middleware\notalumne::class,"notalumne"]]);
$app->post("/create-grup", "App\Controllers\Controlpanel:createGrup",[[\App\Middleware\notalumne::class,"notalumne"]]);
$app->post("/modifi-grup", "App\Controllers\Controlpanel:modifiGrup",[[\App\Middleware\notalumne::class,"notalumne"]]);
$app->post("/drop-grup", "App\Controllers\Controlpanel:dropGrup",[[\App\Middleware\notalumne::class,"notalumne"]]);
$app->post("/create-user", "App\Controllers\Controlpanel:createUser",[[\App\Middleware\notalumne::class,"notalumne"]]);
$app->post("/modifi-user", "App\Controllers\Controlpanel:modifiUser",[[\App\Middleware\notalumne::class,"notalumne"]]);
$app->post("/drop-user", "App\Controllers\Controlpanel:dropUser",[[\App\Middleware\notalumne::class,"notalumne"]]);
$app->post("/createorla", "App\Controllers\Controlpanel:ctrlCreateOrla",[[\App\Middleware\notalumne::class,"notalumne"]]);
$app->post("/modifiorla", "App\Controllers\Controlpanel:ctrlmodifiOrla",[[\App\Middleware\notalumne::class,"notalumne"]]);
$app->post("/droporla", "App\Controllers\Controlpanel:ctrldropOrla",[[\App\Middleware\notalumne::class,"notalumne"]]);
$app->post("/updatedatauser", "App\Controllers\User:Updateuser",[[\App\Middleware\Auth::class,"auth"]]);
$app->post("/checkpass", "App\Controllers\User:checkpass");

$app->post("/check-username", "App\Controllers\User:checkuser");

$app->get(Router::DEFAULT_ROUTE, "App\Controllers\Error:ctrlIndex");

// forget password 
$app->get("/forgot-password", "App\Controllers\ForgotPassword:ctrlIndex");
$app->post("/doforgotpassword", "App\Controllers\ForgotPassword:ctrlDoForgotPassword");
$app->get("/reset-password", "App\Controllers\ResetPassword:ctrlIndex");
$app->post("/restablecercontra", "App\Controllers\ResetPassword:ctrlDoResetPassword");

// CSV
$app->post("/csvfile", "App\Controllers\Controlpanel:cntrlIndex");

$app->execute();