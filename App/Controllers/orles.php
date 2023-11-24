<?php

namespace App\Controllers;

class Orles{

    public function ctrlIndex($request, $response, $container)
    {

        $response->SetTemplate("configorla.php");

        return $response;
    }
}
