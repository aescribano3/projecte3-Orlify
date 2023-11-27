<?php

namespace App\Controllers;

class SingUp{


    public function ctrlIndex($request, $response, $container)
    {

        $response->SetTemplate("register.php");

        return $response;
    }

    public function Register($request, $response, $container)
    {


        

       
        $putrol = $request->get("SESSION", "rol");


        $username = $request->get(INPUT_POST, "username");
        $nom = $request->get(INPUT_POST, "name");
        $lastname = $request->get(INPUT_POST, "lastname");
        $pass = $request->get(INPUT_POST, "password");
        $email = $request->get(INPUT_POST, "email");


        if($putrol){
            $roluser = $request->get(INPUT_POST, "rol");  
        }else{
            $roluser = "alumne";
        }

        $model = $container->get("users");

        
        
        $register = $model->register($username,$nom,$lastname,$pass,$email,$roluser);

        

        return $response;
    }
}
