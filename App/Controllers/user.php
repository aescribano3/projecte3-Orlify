<?php
namespace App\Controllers;

class User{

    public function checkuser($request, $response, $container){

        $username = $request->get(INPUT_POST, "usernameid");

        $UserModel = $container->get("users");

        $UserModel = $UserModel->userExists($username);

        echo($UserModel);
        die();
        $response->set($UserModel);        
        $response->setJson();

        $response->set("result","ok" ); 
        $response->setJson();  

    }
}