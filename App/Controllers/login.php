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
        $user = $userModel->login($username, $password);
        
       
        if($user) {
            $response->setSession("user", $user);
            $response->setSession("logged", true);
            $response->redirect("location: /");
        } else {
            $response->redirect("location: /login");
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
