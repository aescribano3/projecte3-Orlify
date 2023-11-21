<?php

namespace App\Controllers;

class userdata{


    public function ctrlsee($request, $response, $container)
    {

        $response->SetTemplate("misdatos.php");

        return $response;
    }
}