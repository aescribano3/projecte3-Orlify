<?php

namespace App\Controllers;

class imguser{


    public function ctrlIndex($request, $response, $container)
    {

        $response->SetTemplate("imgiorla.php");

        return $response;
    }
}
