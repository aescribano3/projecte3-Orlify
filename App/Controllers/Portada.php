<?php

namespace App\Controllers;

class Portada{


    public function ctrlIndex($request, $response, $container)
    {

        $response->SetTemplate("portada.php");

        return $response;
    }
}
