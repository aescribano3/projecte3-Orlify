<?php

namespace App\Controllers;

class Portada{


    public function ctrlPortada($request, $response, $container)
    {

        $response->SetTemplate("portada.php");

        return $response;
    }
}
