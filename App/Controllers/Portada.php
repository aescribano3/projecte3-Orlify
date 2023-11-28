<?php

namespace App\Controllers;

class Portada{


    public function ctrlIndex($request, $response, $container)
    {
        $username = $_SESSION["user"]["username"];
        $response->set("username", $username);
        $response->SetTemplate("portada.php");

        return $response;
    }
}
