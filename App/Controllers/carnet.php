<?php

namespace App\Controllers;

class Carnet{


    public function ctrlCarnet($request, $response, $container)
    {

        $response->SetTemplate("carnet.php");

        return $response;
    }
}
