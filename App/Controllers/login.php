<?php

namespace App\Controllers;

class Login{


    public function ctrlIndex($request, $response, $container)
    {

        $response->SetTemplate("login.php");

        return $response;
    }

    function ctrlDoLogin($request, $response, $container){

        $username = $request->get(INPUT_POST, "user");
        $password = $request->get(INPUT_POST, "pass");
     
        $userModel = $container->get("users");
        $user = $userModel->validateUser($username, $password);

     
        if($user) {
            $response->setSession("user", $user);
            $response->setSession("logged", true);
            $response->redirect("location: /");
        } else {
            $response->setSession("logged", false);
            $response->setSession("error", "Usuari o contrasenya incorrectes");
            $response->redirect("Location: /login");
        }       
    
        return $response;
    }

    function ctrlDoLogout($request, $response, $container){
        $response->setSession("user", []);
        $response->setSession("logged", false);
        $response->redirect("location: /login");
        return $response;
    }

}
