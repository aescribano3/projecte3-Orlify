<?php

namespace App\Controllers;

class Error{
    
    public function ctrlIndex($request, $response, $container)
    {

        $response->SetTemplate("error.php");

        return $response;
    }
}

