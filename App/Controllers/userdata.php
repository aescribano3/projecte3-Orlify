<?php

namespace App\Controllers;

class UserData{


    public function ctrlIndex($request, $response, $container)
    {

        $response->SetTemplate("misdatos.php");

        return $response;
    }
}