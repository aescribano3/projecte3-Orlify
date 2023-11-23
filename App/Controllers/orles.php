<?php

namespace App\Controllers;

class Orles{


    public function ctrlCreateIndex($request, $response, $container)
    {

        $response->SetTemplate("createorla.php");

        return $response;
    }
}
