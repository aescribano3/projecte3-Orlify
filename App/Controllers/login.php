<?php

namespace App\Controllers;

class Login{


    public function ctrlindex($request, $response, $container)
    {

        $response->SetTemplate("login.php");

        return $response;
    }

    /**
     * [ctrlDoLogin is a function that validates the user and password of the user and then creates a session]
     *

     * @param   INPUT_POST              [ obtain the user and password from the form]
     * @param   array       $userModel  [obtains the user model from the container]
     * @param   array       $user       [validate the user and password]
     * @param   string      $username   [contains the user name]
     * @param   string      $password   [contains the password of the user]
     * @param   session     logged      [contains the session of the user]
     * @return  array       $response   [return the array of the response]
     * 
     */

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

    /**
     * [ctrlDoLogout is a function that closes the session of the user]
     *
     * @param   session                 [ contains the session of the user]
     *
     * @return  array                     [return the array of the response]
     */
    function ctrlDoLogout($request, $response, $container){
        $response->setSession("user", []);
        $response->setSession("logged", false);
        $response->setSession("professor",false);
        $response->redirect("location: /login");
        return $response;
    }

}
