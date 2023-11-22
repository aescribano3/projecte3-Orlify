<?php

namespace App\Controllers;

class SingUp{


    public function ctrlIndex($request, $response, $container)
    {

        $response->SetTemplate("register.php");

        return $response;
    }
}
