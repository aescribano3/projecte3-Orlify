<?php

namespace App\Controllers;

class Carnet{


    public function ctrlIndex($request, $response, $container)
    {

        $response->SetTemplate("carnet.php");

        return $response;
    }
}
