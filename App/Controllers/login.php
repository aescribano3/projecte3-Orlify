<?php

namespace App\Controllers;

class Login{


    public function ctrlIndex($request, $response, $container)
    {

        $response->SetTemplate("login.php");

        return $response;
    }
}
