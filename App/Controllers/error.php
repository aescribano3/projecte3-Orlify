<?php

namespace App\Controllers;

class error{
    
    public function ctrlIndex($request, $response, $container)
    {

        $response->SetTemplate("error.php");

        return $response;
    }
}

